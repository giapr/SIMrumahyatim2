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
            <div class="row mt-6">
                <div class="col-md-4 col md-ofset-4">
                    <?php echo form_open_multipart('keuangan/tambahDataPemasukan'); ?>


                    <div class="form-group">
                        <label>Nama Donatur*</label>
                        <select class="form-control" id="id_donatur" name="id_donatur">
                            <option value="<?= set_value('Sekolah'); ?>">- Silahkan masukkan nama donatur -</option>
                            <?php foreach ($donatur as $a) : ?>
                                <option value="<?= $a['id'] ?>"><?= $a['nama'] ?> - <?= $a['alamat'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <?= form_error('id_donatur', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label>Tanggal*</label>
                        <input class="form-control" type="date" id="tanggal" name="tanggal" value="<?= set_value('tanggal'); ?>">
                        <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <label>Jumlah Nominal*</label>
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Rp</span>
                        </div>
                        <input type="text" class="form-control" id="nominal_masuk" name="nominal_masuk" placeholder="nominal" aria-label="nominal_masuk" aria-describedby="addon-wrapping" value="<?= set_value('nominal_masuk'); ?>">
                        <br>
                    </div>
                    <?= form_error('nominal_masuk', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="form-group">
                        <label>Bukti Pemasukan*</label>
                        <input class="form-control" type="file" name="bukti" size="20">
                        <?= form_error('bukti', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary btn-flat">Batal</button>
                        <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>