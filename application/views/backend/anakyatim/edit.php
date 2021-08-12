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
						<input type="hidden" name="id" value="<?= $anakyatim['id']; ?>">
						<div class="form-group">
							<label>Nama* </label>
							<input type="text" name="Nama_anak" class="form-control" value="<?= $anakyatim['Nama_anak'] ?>">
							<?= form_error('Nama_anak', '<small class="text-danger pl-3">', '</small>'); ?>

						</div>
						<div class="form-group">
							<label>Tanggal Lahir* </label>
							<input type="date" name="Tgllahir_anak" class="form-control" value="<?= $anakyatim['Tgllahir_anak'] ?>">
							<?= form_error('Tgllahir_anak', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<label>Jenis Kelamin* </label>
						<div class="form-group" class="radio">
							<input type="radio" id="optionsRadios1" name="Jenis_k" value="Laki-laki" <?php if ($anakyatim['Jenis_k'] == 'Laki-laki') echo 'checked' ?>> Laki-laki
							<input type="radio" id="optionsRadios2" name="Jenis_k" value="Perempuan" <?php if ($anakyatim['Jenis_k'] == 'Perempuan') echo 'checked' ?>> Perempuan
						</div>
						<div class="form-group">
							<label>Sekolah* </label>
							<input type="text" class="form-control" name="Sekolah" value="<?= $anakyatim['Sekolah'] ?>">
							<?= form_error('Sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label>Alamat* </label>
							<input type="text" class="form-control" name="Alamat" value="<?= $anakyatim['Alamat'] ?>">
							<?= form_error('Alamat', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-secondary btn-flat">Batal</button>
							<button type="submit" class="btn btn-success btn-flat">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>