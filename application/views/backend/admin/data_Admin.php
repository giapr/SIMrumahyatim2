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

    <div class="card-body">
        <a href="<?php echo base_url() ?>admin/tambah_admin" class="btn btn-secondary">Tambah Admin</a>
    </div>
    <!-- Main content -->

    <div class="card">

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>alamat</th>
                        <th>jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($admin as $a) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $a['username'] ?></td>
                            <td><?= $a['alamat'] ?></td>
                            <td><?= $a['jabatan'] ?></td>
                        </tr>
                    <?php $i++;
                    endforeach
                    ?>
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>