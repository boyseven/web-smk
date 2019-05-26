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
						<a href="<?php echo site_url('admin/berita/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/berita/add') ?>" method="post" enctype="multipart/form-data" >
						<div class="row">
							<div class="col-md-9">
								<div class="form-group">
									<label for="judul">Judul*</label>
									<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"
									type="text" name="judul" placeholder="Judul berita" value="<?php echo set_value('judul') ?>" />
									<div class="invalid-feedback">
										<?php echo form_error('judul') ?>
									</div>
								</div>

								<div class="form-group">
									<label for="name">Lead*</label>
									<textarea class="form-control <?php echo form_error('lead') ? 'is-invalid':'' ?>"
									name="lead" placeholder="Lead" value="<?php echo set_value('lead') ?>"></textarea>
									<div class="invalid-feedback">
										<?php echo form_error('lead') ?>
									</div>
								</div>

								<div class="form-group">
									<label for="name">Content*</label>
									<textarea  class="form-control <?php echo form_error('content') ? 'is-invalid':'' ?>"
									name="content" placeholder="Isi content berita..." value="<?php echo set_value('content') ?>"></textarea>
									<div class="invalid-feedback">
										<?php echo form_error('content') ?>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<label>Foto</label>
								<div class="custom-file">
									<input class="form-control-file custom-file-input <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
									type="file" name="gambar" value="<?php echo set_value('gambar') ?>"/>
									<label class="custom-file-label" for="name">Pilih foto</label>
									<div class="invalid-feedback">
										<?php echo form_error('gambar') ?>
									</div>
									<label class="text-muted">Maks. Ukuran 1280x853 (2MB)</label>
								</div>

								<!-- <div class="form-group">
									<label for="name">Kategori*</label>
									<input class="form-control <?php echo form_error('kategori') ? 'is-invalid':'' ?>"
									type="text" name="kategori" placeholder="kategori berita" value="<?php echo set_value('kategori') ?>"/>
									<div class="invalid-feedback">
										<?php echo form_error('kategori') ?>
									</div>
								</div> -->

								<div class="form-group">
									<label for="name">Post*</label>
									<input id="datepicker" class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
									type="text" name="tanggal" placeholder="Tanggal post berita" value="<?php echo set_value('tanggal') ?>"/>
									<div class="invalid-feedback">
										<?php echo form_error('tanggal') ?>
									</div>
								</div>

								<!-- <div class="form-group">
									<label for="name">Penulis*</label>
									<input class="form-control <?php echo form_error('penulis') ? 'is-invalid':'' ?>"
									type="text" name="penulis" placeholder="penulis berita" value="<?php echo set_value('penulis') ?>"/>
									<div class="invalid-feedback">
										<?php echo form_error('penulis') ?>
									</div>
								</div>
		
								<div class="form-group">
									<label for="name">Tags*</label>
									<textarea class="form-control <?php echo form_error('tags') ? 'is-invalid':'' ?>"
									name="tags" placeholder="Isi tags..." value="<?php echo set_value('tags') ?>"></textarea>
									<div class="invalid-feedback">
										<?php echo form_error('tags') ?>
									</div>
								</div> -->
								<input class="btn btn-success" type="submit" name="btn" value="Upload" />
							</div>
						</div>	
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields / wajib diisi
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