<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark warning-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/logo-smaktudi-nav.png'); ?>" height="25" alt="Logo SMKN 1 Batumandi"></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>">Beranda
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('berita');?>">Berita</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pegawai</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Fasilitas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Siswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Galeri</a>
      </li>
    </ul>
    <!-- Links Icon-->
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-youtube"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
    </ul>
    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Pencarian" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar