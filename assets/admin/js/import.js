let importModal = $("#importModal");
let productTable = $("#table_product");

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

function importCSV() {
    formData[0].reset();
    importModal.modal("show");
}

function uploadCSV() {
    let formData = new FormData();
    let fileInput = document.getElementById("csv_file");
    formData.append("csv_file", fileInput.files[0]);

    // Menampilkan progress bar
    let progressBar = $(".progress-bar");
    let progressContainer = $(".progress");
    progressBar.css("width", "0%");
    progressContainer.show();

    $.ajax({
        type: "POST",
        url: "product/importCSV",
        data: formData,
        contentType: false,
        processData: false,
        xhr: function () {
            // Menggunakan XMLHttpRequest agar dapat memantau kemajuan unggahan
            let xhr = new XMLHttpRequest();
            xhr.upload.addEventListener("progress", function (e) {
                if (e.lengthComputable) {
                    let percentComplete = (e.loaded / e.total) * 100;
                    progressBar.css("width", percentComplete + "%");
                    progressBar.text(percentComplete.toFixed(2) + "%"); // Menampilkan persentase
                }
            });
            return xhr;
        },
        success: function (response) {
            if (response.status === "success") {
                importModal.modal("hide");
                productTable.DataTable().ajax.reload();
                notification(response.status, response.message);
            } else {
                importModal.modal("hide");
                productTable.DataTable().ajax.reload();
                notification(response.status, response.message);
            }
        },
        error: function (xhr, status, error) {
            console.log("Error: " + error);
            notification("danger", "Error: " + error);
        },
        complete: function () {
            // Sembunyikan progress bar setelah selesai
            progressContainer.hide();
        },
    });
}
