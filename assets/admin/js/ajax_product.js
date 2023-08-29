let typeData;
let modal = $("#modalData");
let tableProduct = $("#table_product");
let formData = $("#formData");
let modalTitle = $("#modalTitle");
let btnSave = $("#btnSave");

$(document).ready(function () {
    tableProduct.DataTable({
        processing: true,
        serverSide: true,
        order: [[1, "desc"]],
        ajax: {
            url: "product/getProducts",
            type: "POST",
        },
        columns: [
            { data: "No", orderable: false },
            { data: "Kode", orderable: false },
            { data: "Tanggal", orderable: false },
            { data: "Action", orderable: false },
        ],
        columnDefs: [
            {
                targets: [-1],
                orderable: false,
            },
        ],
    });
});

function addProduct() {
    typeData = "add";
    formData[0].reset();
    modal.modal("show");
    modalTitle.text("Add Product");
}

function save() {
    btnSave.text("Please wait...");
    btnSave.attr("disabled", true);

    if (typeData == "add") {
        url = "product/addProduct";
    } else {
        url = "product/editProduct";
    }

    $.ajax({
        type: "POST",
        url: url,
        data: formData.serialize(),
        dataType: "JSON",
        success: function (response) {
            if (response.status === "success") {
                modal.modal("hide");

                tableProduct.DataTable().ajax.reload(function () {
                    tableProduct.DataTable().order([1, "desc"]).draw();

                    formData[0].reset();
                    btnSave.text("Save");
                    btnSave.attr("disabled", false);
                }, false);
            }
        },
        error: function () {
            console.log("error database");
        },
    });
}

function edit(id, type) {
    typeData = "edit";

    $.ajax({
        type: "GET",
        url: "product/byId/" + id,
        dataType: "JSON",
        success: function (response) {
            formData[0].reset();
            modalTitle.text("Edit Product");
            btnSave.text("Edit");
            btnSave.attr("disabled", false);
            $("#kode_bcf").val(response.kode_bcf);
            $("#tgl_jual").val(response.tgl_jual);
            modal.modal("show");
        },
    });
}
