    <ul class="sidebar navbar-nav">
      <li class="nav-item <?php echo $this->uri->segment(2)==''? 'active':''?>">
        <a class="nav-link" href="<?php echo site_url('admin/overview') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/overview/my_profile'); ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>My Profil</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('admin/jumbotron') ?>">
          <i class="fas fa-images"></i>
          <span>Jumbotron</span></a>
      </li>
      <li class="nav-item dropdown <?php echo $this->uri->segment(2)=='berita'?'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Berita</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Berita:</h6>
          <a class="dropdown-item" href="<?php echo site_url('admin/berita/add') ?>">Tambah Berita</a>
          <a class="dropdown-item" href="<?php echo site_url('admin/berita') ?>">List Berita</a>
        </div>
      </li>
      <li class="nav-item dropdown <?php echo $this->uri->segment(2)=='berita'?'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-address-card"></i>
          <span>Menu Profil</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Profil:</h6>
          <a class="dropdown-item" href="<?php echo site_url('admin/berita/add') ?>">Tambah Profil</a>
          <a class="dropdown-item" href="<?php echo site_url('admin/berita') ?>">List Profil</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('admin/overview/changepassword') ?>">
          <i class="fas fa-fw fa-key"></i>
          <span>Change Password</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url('admin/auth/registration'); ?>">Register an Account</a>
        </div>
    </ul>