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
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Username* </label>
                            <input type="text" name="username" class="form-control" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat* </label>
                            <input type="text" class="form-control" name="alamat" value="<?= set_value('alamat'); ?>">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?></input>
                        </div>
                        <div class="form-group">
                            <label>Jabatan* </label>
                            <input type="text" class="form-control" name="jabatan" value="<?= set_value('jabatan'); ?>">
                            <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?></input>
                        </div>
                        <div class="form-group">
                            <label>Password* </label>
                            <input type="password" class="form-control" name="password" value="<?= set_value('password'); ?>">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?></input>
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                            <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>