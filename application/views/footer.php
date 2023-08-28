  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Baby Cloudfoam</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <!-- <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>assets/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/vendor/aos/aos.js"></script>

<!-- DataTables  & Plugins -->
<script src="http://localhost/admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="http://localhost/admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="http://localhost/admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="http://localhost/admin/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="http://localhost/admin/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="http://localhost/admin/assets/plugins/jszip/jszip.min.js"></script>
<script src="http://localhost/admin/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="http://localhost/admin/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="http://localhost/admin/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="http://localhost/admin/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="http://localhost/admin/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>assets/assets/js/main.js"></script>

</body>

</html>