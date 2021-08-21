<!-- Content Wrapper. Contains page content -->
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
    </section>


    <!-- Main content -->
    <div class="container-fluid">
        <?php
        foreach ($profil as $a) :
        ?>
            <?php echo form_open_multipart('Admin/editProfil/' . $a['id']); ?>
            <div class="row mb-2">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><label>Latar Belakang*</label>
                                <textarea name="latar_belakang" class="form-control"><?= $a['latar_belakang']; ?></textarea>
                                <?= form_error('latar_belakang', '<small class="text-danger pl-3">', '</small>'); ?>
                            </p>
                            <p class="card-text"><label>Program Kerja*</label>
                                <textarea name="program_kerja" class="form-control"><?= $a['program_kerja']; ?></textarea>
                                <?= form_error('program_kerja', '<small class="text-danger pl-3">', '</small>'); ?>
                            </p>
                            <p class="card-text"><label>Tujuan*</label>
                                <textarea name="tujuan" class="form-control"><?= $a['tujuan']; ?></textarea>
                                <?= form_error('tujuan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </p>
                            <p class="card-text"><label>Visi*</label>
                                <textarea name="visi" class="form-control"><?= $a['visi']; ?></textarea>
                                <?= form_error('visi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </p>
                            <p class="card-text"><label>Misi*</label>
                                <textarea name="misi" class="form-control"><?= $a['misi']; ?></textarea>
                                <?= form_error('misi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </p>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                    <?php endforeach ?>
                    <div class="form-group">
                        <button type="" class="btn btn-secondary btn-flat">Batal</button>
                        <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                    </div>
                    </div>


                </div>
            </div>



            <?php echo form_close(); ?>


    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>