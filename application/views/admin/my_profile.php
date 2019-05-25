<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('admin/_partials/head'); ?>
</head>

<body id="page-top">
  <!-- Navbar -->
  <?php $this->load->view('admin/_partials/navbar'); ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('admin/_partials/sidebar'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <?php $this->load->view('admin/_partials/breadcrumb'); ?>
        <?php echo $this->session->flashdata('message'); ?>

        <!-- Page Content -->
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?php echo base_url('upload/user/').$user['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $user['name']; ?></h5>
                <p class="card-text"><?php echo $user['email']; ?></p>
                <p class="card-text"><small class="text-muted">Member since <?php echo date('d F Y', $user['date_created']); ?></small></p>
                <hr>
                <a href="<?php echo site_url('admin/overview/edit') ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php $this->load->view('admin/_partials/footer'); ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->
<?php $this->load->view('admin/_partials/scrolltop'); ?>
<?php $this->load->view('admin/_partials/modal'); ?>
<?php $this->load->view('admin/_partials/js'); ?>
</body>

</html>
