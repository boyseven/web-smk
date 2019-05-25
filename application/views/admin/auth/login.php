<!DOCTYPE html>
<html lang="en">

<head>

<?php $this->load->view('admin/auth/auth_header'); ?>

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <?php echo $this->session->flashdata('message'); ?>
        <form method="post" action="<?php echo base_url('admin/auth'); ?>">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="email" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" value="<?php echo set_value('email') ?>">
              <label for="inputEmail">Email address</label>
              <?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
              <?php echo form_error('password','<small class="text-danger pl-3">','</small>'); ?>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Login</button>
        </form>
      </div>
    </div>
  </div>

<?php $this->load->view('admin/auth/auth_footer'); ?>  

</body>

</html>
