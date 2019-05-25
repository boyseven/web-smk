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
        <!-- 
          karena ini halaman overview (home), maka tidak pakai partial breadcrumb
         -->
         <?php //$this->load->view('admin/_partials/breadcrumb'); ?>
        <!-- Icon Cards-->
        <?php echo $this->session->flashdata('message'); ?>
        <?php echo $this->session->flashdata('message_password'); ?>
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">26 New Messages!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">11 New Tasks!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">123 New Orders!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Berita</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Post</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($berita as $berita):?>
                  <tr>
                    <td><?php cetak($berita->judul) ?></td>
                    <td><?php cetak ($berita->kategori) ?></td>
                    <td><?php cetak ($berita->tanggal) ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Terakhir update <?php foreach($upload as $ber){ echo $ber->ditulis;};?></div>
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
