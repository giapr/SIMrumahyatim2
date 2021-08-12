<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?php echo $judul ?></h1>
				</div>
				<div class="col-sm-12">
				</div>
			</div>
		</div><!-- /.container-fluid -->


		<div class="box-body">
			<div class="row mt-3">
				<div class="col-md-4 col md-offset-4">
					<form action="" method="POST">
						<input type="hidden" name="id" value="<?= $duafa['id']; ?>">
						<div class="form-group">
							<label>Nama* </label>
							<input type="text" name="nama" class="form-control" value="<?= $duafa['nama'] ?>">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label>Alamat* </label>
							<input type="text" name="alamat" class="form-control" value="<?= $duafa['alamat'] ?>">
							<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-secondary btn-flat">Batal</button>
							<button type="submit" class="btn btn-danger btn-flat">Reset</button>
							<button type="submit" class="btn btn-success btn-flat">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>