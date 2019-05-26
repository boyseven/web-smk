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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/jumbotron/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/jumbotron/edit') ?>" method="post" enctype="multipart/form-data" >
							<div class="row">
							<input type="hidden" name="id" value="<?php echo $jumbotron->id?>" />
								<div class="col-md-9">
									<div class="form-group">
										<label for="name">Judul*</label>
										<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"
										 type="text" name="judul" placeholder="Judul jumbotron" value="<?php echo $jumbotron->judul ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('judul') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="name">Deksripsi*</label>
										<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>"
										 name="deskripsi" placeholder="Lead" ><?php echo $jumbotron->deskripsi ?></textarea>
										<div class="invalid-feedback">
											<?php echo form_error('deskripsi') ?>
										</div>
									</div>

								</div>
								<div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
										<label>Foto</label>
										<div class="custom-file">
											<input class="form-control-file custom-file-input <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
											type="file" name="gambar" value="<?php echo set_value('gambar') ?>"/>
											<label class="custom-file-label" for="name">Pilih foto</label>
											<input type="hidden" name="old_image" value="<?php echo $jumbotron->gambar ?>">
											<div class="invalid-feedback">
												<?php echo form_error('gambar') ?>
										</div>
										<label class="text-muted">Ukuran Optimal 1280x853 px</label>

										<hr>
										<div class="checkbox ">
											<label for="tampil" class="col-lg-6">Tampil</label>
											<input class="col-lg-6" name="tampil" type="checkbox" checked data-toggle="toggle">
											</label>
										</div>
										<hr>

									<input class="btn btn-success" type="submit" name="btn" value="Save" />
								</div>	
							</div>
						</form>

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