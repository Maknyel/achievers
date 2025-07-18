
      </div>
      <!-- End of Main Content -->

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?=base_url()?>admin/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="<?=base_url()?>assets/plugin/sb/vendor/jquery/jquery.min.js"></script> -->
  <script src="<?=base_url()?>assets/plugin/sb/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>assets/plugin/sb/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>assets/plugin/sb/js/sb-admin-2.min.js"></script>


  <?php if($page == 'dashboard'){ ?>
  <!-- Page level plugins -->
  <script src="<?=base_url()?>assets/plugin/sb/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?=base_url()?>assets/plugin/sb/js/demo/chart-area-demo.js"></script>
  <!-- <script src="<?=base_url()?>assets/plugin/sb/js/demo/chart-pie-demo.js"></script> -->
  <?php } ?>
  <?php if($page == 'subdivision' || $page == 'file_m' || $page == 'news' || $page == 'houselist' || $page == 'users' || $page == 'agents' || $page == 'sellhouse' || $page == 'leads' || $page == 'file_management'){ ?>
    <!-- Page level plugins -->
    <script src="<?=base_url()?>assets/plugin/sb/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/plugin/sb/vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url()?>assets/plugin/sb/js/demo/datatables-demo.js"></script>
  <?php } ?>

</body>

</html>
<?php if($page == 'dashboard'){ ?>
<script type="text/javascript">
  $(window).ready(function(){
    // dashboard_datasv1(`<?=date('Y')?>`);
    dashboard_datasv2(`<?=date('Y')?>`);
  });
  
</script>

<?php } ?> 