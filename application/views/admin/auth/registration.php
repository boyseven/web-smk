<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('admin/auth/auth_header'); ?>
</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('admin/auth/registration'); ?>">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="name" name="name" class="form-control" placeholder="Full name" required="required" value="<?php echo set_value('name') ?>">
              <label for="name">Full name</label>
              <?php echo form_error('name','<small class="text-danger pl-3">','</small>'); ?> 
            </div>
          </div>
            
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="email" name="email" class="form-control" placeholder="Email address" required="required" value="<?php echo set_value('email') ?>">
              <label for="email">Email address</label>
              <?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?> 
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="password1" name="password1" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                  <?php echo form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                  <?php echo form_error('password2','<small class="text-danger pl-3">','</small>'); ?>
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url('admin/overview'); ?>">Admin Page</a>
        </div>
      </div>
    </div>
  </div>

<?php $this->load->view('admin/auth/auth_footer'); ?>

</body>

</html>
