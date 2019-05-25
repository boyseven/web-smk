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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/overview/my_profile') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<?= form_open_multipart('admin/overview/edit') ?>
							
							<div class="form-group row">
							    <label for="email" class="col-sm-2 col-form-label">Email</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $user['email']; ?>" readonly>
							    </div>
							</div>
							
							<div class="form-group row">
							    <label for="name" class="col-sm-2 col-form-label">Full name</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?php echo $user['name']; ?>"  required="required">
							      <?php echo form_error('name','<small class="text-danger pl-3">','</small>'); ?>
							    </div>
							</div>
							
							<div class="form-group row">
							    <label for="name" class="col-sm-2 col-form-label">Picture</label>
							    <div class="col-sm-10">
							      <div class="row">
							      	<div class="col-sm-3">
							      		<img src="<?= base_url ('upload/user/').$user['image'];  ?>" class="img-thumbnail">
							      	</div>
							      	<div class="col-sm-9">
							      		<div class="custom-file">
										  <input type="file" class="custom-file-input" id="image" name="image">
										  <label class="custom-file-label" for="image">Choose file</label>
										</div>
										<label class="text-muted">Maks. Ukuran 1280x853 (1MB)</label>
							      	</div>
							      </div>
							    </div>
							</div>

							<div class="form-group row justify-content-end">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-primary">Edit</button>
								</div>
							</div>
						<?= form_close(); ?>

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