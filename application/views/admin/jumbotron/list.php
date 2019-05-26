<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('admin/_partials/head'); ?>
</head>
<body id="page-top">
	<!-- navbar -->
	<?php $this->load->view('admin/_partials/navbar'); ?>
	<div id="wrapper">
		<!-- sidebar -->
		<?php $this->load->view('admin/_partials/sidebar'); ?>
		<div id="content-wrapper">

		<div class="container-fluid">
			<?php $this->load->view('admin/_partials/breadcrumb'); ?>

			<!-- DataTables Example -->
	        <div class="card mb-3">
	          <div class="card-header"><a href="<?php echo site_url('admin/jumbotron/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a></div>
	          
	          <div class="card-body">
	            <div class="table-responsive-sm">
	              <table class="table table-borderless table-hover" id="dataTable" width="100%" cellspacing="0">
	                <thead>
	                	<tr>
							<th>Gambar</th>
							<th>Judul</th>
							<th>Post</th>
							<th>Action</th>
						</tr>
	                </thead>
	                <tbody>
	                	<?php $no=1; foreach ($jumbotron as $jumbotron):?>
							<tr>
								<td><img src="<?php cetak( base_url('upload/jumbotron/'.$jumbotron->gambar)) ?>" width="64" /></td>
								<td><?php cetak($jumbotron->judul) ?></td>
								<td><?php cetak ($jumbotron->date_created) ?></td>
								<td>
									<a href="<?php echo site_url('admin/jumbotron/edit/'.$jumbotron->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
									<a onclick="deleteConfirm('<?php echo site_url('admin/jumbotron/delete/'.$jumbotron->id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
								</td>
							</tr>
						<?php endforeach; ?>
	                </tbody>
	              </table>
	            </div>
	          </div>
	          <div class="card-footer small text-muted">Terakhir update <?php foreach($upload as $ber){ echo $ber->date_created;};?></div>
	        </div>
		</div>
		<!-- /.Container Fluid -->
		</div>

		<!-- Sticky Footer -->
		<?php $this->load->view('admin/_partials/footer'); ?>

	</div>
	<!-- /.#wrapper -->

	<?php $this->load->view('admin/_partials/scrolltop'); ?>
	<?php $this->load->view('admin/_partials/modal'); ?>

	<?php $this->load->view('admin/_partials/js'); ?>
 	<script>
	function deleteConfirm(url){
	  $('#btn-delete').attr('href', url);
	  $('#deleteModal').modal();
	}
	</script>

</body>
</html>