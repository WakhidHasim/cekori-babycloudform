let modalData = $("#modalData");
let tableProduct = $("#table_product");
let formData = $("#formData");
let modalTitle = $("#modalTitle");
let btnSave = $("#btnSave");

$(document).ready(function () {
    tableProduct.DataTable({
        processing: true,
        serverSide: true,
        order: [],
        ordering: false,
        ajax: {
            url: "product/getProducts",
            type: "POST",
        },
        columnDefs: [
            {
                target: [-1],
                orderable: false,
            },
        ],
    });
});

function notification(type, text) {
    $.notify(
        {
            icon: "flaticon-alarm-1",
            title: "Baby CloudFoam",
            message: text,
        },
        {
            type: type,
            placement: {
                from: "top",
                align: "right",
            },
            time: 500,
        }
    );
}

function addProduct() {
    formData[0].reset();
    modalData.modal("show");
    modalTitle.text("Add Product");
}

function saveData() {
    btnSave.text("Please wait...");
    btnSave.attr("disabled", true);

    $.ajax({
        type: "POST",
        url: "product/addProduct",
        data: formData.serialize(),
        dataType: "JSON",
        success: function (res) {
            formData.find(".is-invalid").removeClass("is-invalid");
            formData.find(".invalid-feedback").text("");

            if (res.status === "success") {
                modalData.modal("hide");
                tableProduct.DataTable().ajax.reload();
                notification("success", "Product Data Added Successfully!");
            } else {
                for (let i = 0; i < res.input_error.length; i++) {
                    $('[name="' + res.input_error[i] + '"]').addClass(
                        "is-invalid"
                    );
                    $('[name="' + res.input_error[i] + '"]')
                        .next()
                        .text(res.error_string[i]);
                }
            }
            btnSave.text("Add Product");
            btnSave.attr("disabled", false);
        },
        error: function (xhr, status, error) {
            console.log("Error: " + error);
        },
    });
}
