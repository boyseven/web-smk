<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb") ?>

				<?php echo $this->session->flashdata('message_password'); ?> 

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/overview') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<div class="col-md-6">
							<form action="<?= base_url ('admin/overview/changepassword'); ?>" method="post">
								<div class="form-group">
								    <label for="current_password">Current password</label>
								    <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current password" required="required">
								    <?php echo form_error('current_password','<small class="text-danger pl-3">','</small>'); ?>
								</div>
								<div class="form-group">
								    <label for="new_password1">New password</label>
								    <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="New password" required="required">
								    <?php echo form_error('new_password1','<small class="text-danger pl-3">','</small>'); ?>
								</div>								
								<div class="form-group">
								    <label for="new_password2">Repeat password</label>
								    <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="Repeat password" required="required">
								    <?php echo form_error('new_password2','<small class="text-danger pl-3">','</small>'); ?>
								</div>
								<div class="form-group">
									<button class="btn btn-primary">Change password</button>
								</div>	
							</form>
						</div>
					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>

				</div>
			</div>
			<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop") ?>

		<?php $this->load->view("admin/_partials/js") ?>
</body>

</html>