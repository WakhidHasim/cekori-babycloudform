<footer class="footer">
    <div class="container-fluid">
        <div class="copyright mx-auto">
            <p class="mb-0 text-muted">Copyright &copy;<?= date('Y'); ?> &mdash; Baby CloudFoam | All rights reserved.</p>
        </div>
    </div>
</footer>
</div>

</div>
<!--   Core JS Files   -->
<script src="<?= base_url() ?>assets/admin/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?= base_url() ?>assets/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url() ?>assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Bootstrap Notify -->
<script src="<?= base_url() ?>assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<!-- Sweet Alert -->
<script src="<?= base_url() ?>assets/admin/js/plugin/sweetalert/sweetalert.min.js"></script>
<!-- Datatables -->
<script src="<?= base_url() ?>assets/admin/js/plugin/datatables/datatables.min.js"></script>
<!-- Atlantis JS -->
<script src="<?= base_url() ?>assets/admin/js/atlantis.min.js"></script>

<!-- Ajax Product -->
<script src="<?= base_url() ?>assets/admin/js/ajax_product.js"></script>

<!-- Import CSV -->
<script src="<?= base_url() ?>assets/admin/js/import.js"></script>

<script>
    const flashData = $('.flash-data').data('flashdata');
    const errorFlashData = $('.error-flashdata').data('flashdata');

    if (flashData) {
        notification('success', flashData);
    }

    if (errorFlashData) {
        notification('danger', errorFlashData);
    }

    function notification(type, text) {
        $.notify({
            icon: "flaticon-alarm-1",
            title: "Baby CloudFoam",
            message: text,
        }, {
            type: type,
            placement: {
                from: "top",
                align: "right",
            },
            time: 1000,
        });
    }


    document.addEventListener("DOMContentLoaded", function() {
        const togglePasswordButtons = document.querySelectorAll(".toggle-password");

        togglePasswordButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                const targetId = button.getAttribute("data-target");
                const passwordInput = document.getElementById(targetId);

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    button.innerHTML = '<i class="fa fa-eye"></i>';
                } else {
                    passwordInput.type = "password";
                    button.innerHTML = '<i class="fa fa-eye-slash"></i>';
                }
            });
        });
    });
</script>

</body>

</html>