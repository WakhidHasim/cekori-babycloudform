let typeData = "add";
let modalData = $("#modalData");
let tableProduct = $("#table_product");
let formData = $("#formData");
let modalTitle = $("#modalTitle");
let btnSave = $("#btnSave");

$(document).ready(function () {
    tableProduct.DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        order: [],
        ajax: {
            url: "product/getProducts",
            type: "POST",
        },
        columnDefs: [
            {
                targets: [-1],
                orderable: false,
            },
        ],
    });
});

function reloadPage() {
    tableProduct.DataTable().ajax.reload();
}

function addProduct() {
    typeData = "add";
    formData[0].reset();
    modalData.modal("show");
    modalTitle.text("Add Product");
    btnSave.text("Add Product");
    btnSave.prop("disabled", false);
}

function saveData() {
    btnSave.attr("disabled", true);
    btnSave.text("Please wait...");

    let url;
    let data = formData.serialize();

    if (typeData === "add") {
        url = "product/addProduct";
    } else {
        url = "product/editProduct";
        data += "&kode_bcf=" + $("#hidden_kode_bcf").val();
    }

    $.ajax({
        type: "POST",
        url: url,
        data: data,
        dataType: "JSON",
        success: function (res) {
            if (res.status === "success") {
                modalData.modal("hide");
                reloadPage();
            }

            if (typeData === "add") {
                btnSave.text("Add Product");
            } else if (typeData === "edit") {
                btnSave.text("Edit Product");
            }
            btnSave.prop("disabled", false);
            btnSave.removeAttr("data-type");
        },
        error: function (xhr, status, error) {
            console.log(xhr.responseText);
            if (typeData === "add") {
                btnSave.text("Add Product");
            } else if (typeData === "edit") {
                btnSave.text("Edit Product");
            }
            btnSave.prop("disabled", false);
            btnSave.removeAttr("data-type");
        },
    });
}

function getId(kode_bcf, type) {
    if (type === "edit") {
        typeData = "edit";
        formData[0].reset();
        btnSave.text("Edit Product");
        btnSave.attr("data-type", "edit");
        btnSave.prop("disabled", false);
        saveData(kode_bcf);
    }

    $.ajax({
        type: "GET",
        url: "product/getId/" + kode_bcf,
        dataType: "JSON",
        success: function (res) {
            modalTitle.text("Edit Product");
            $('[name="kode_bcf"]').val(res.kode_bcf);
            $('[name="tgl_jual"]').val(res.tgl_jual);
            modalData.modal("show");
        },
    });
}
