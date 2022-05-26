<footer class="main-footer">

  <strong>Copyright &copy; <?= date('Y') ?> </strong> - <i class="fas fa-code"></i> With <i class="fas fa-coffee"></i> & <i class="fas fa-heart"></i> By Vikriyansyah Lihawa
</footer>

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= $base_url ?>public/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= $base_url ?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $base_url ?>public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= $base_url ?>public/assets/dist/js/demo.js"></script>
<!-- SummerNote js -->
<script src="<?= $base_url ?>public/assets/plugins/summernote/summernote.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyACs-iN3GB1AQKBnLnZfEq3C829LEo2Tb8",
    authDomain: "prolanisapp.firebaseapp.com",
    databaseURL: "https://prolanisapp-default-rtdb.firebaseio.com",
    projectId: "prolanisapp",
    storageBucket: "prolanisapp.appspot.com",
    messagingSenderId: "397590558437",
    appId: "1:397590558437:web:04d40e0ce63ecbb115460c",
    measurementId: "G-DQ0883Z9ME"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
<script>
  $(document).ready(function() {
    setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 2000);
  });



  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
  $(document).ready(function() {
    $('#tb_data').DataTable({
      "searching":false,
    });
  });
  

</script>



</body>

</html>