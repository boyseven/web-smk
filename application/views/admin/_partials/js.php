<!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('sb_admin/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('sb_admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('sb_admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('sb_admin/vendor/chart.js/Chart.min.js');?>"></script>
  <script src="<?php echo base_url('sb_admin/vendor/datatables/jquery.dataTables.js');?>"></script>
  <script src="<?php echo base_url('sb_admin/vendor/datatables/dataTables.bootstrap4.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('sb_admin/js/sb-admin.min.js');?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('sb_admin/js/demo/datatables-demo.js')?>"></script>
  <script src="<?php echo base_url('sb_admin/js/demo/chart-area-demo.js');?>"></script>
  <!-- Datepicker -->
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <!-- Text Editor js -->
  <script src="https://cdn.ckeditor.com/4.11.3/full/ckeditor.js"></script>

  <script>
  $('.custom-file-input').on('change', function(){
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });

  $('#datepicker').datepicker({
      uiLibrary: 'bootstrap4'
  });

  CKEDITOR.replace( 'content' );
  </script>
   