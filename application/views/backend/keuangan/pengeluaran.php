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
    <a href="<?php echo base_url() ?>keuangan/tambahDataPengeluaran" class="btn btn-secondary">Tambah Data Pengeluaran</a>
  </div>
  <!-- Main content -->
  <div class="card">
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Keterangan</th>
            <th scope="col">nominal</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($pengeluaran as $a) : ?>
            <tr>
              <td><?= $i ?></td>
              <td><?= $a['tanggal'] ?></td>
              <td><?= $a['keterangan'] ?></td>
              <td style="text-align:right;">Rp <?= number_format($a['nominal_keluar'], 0, ',', '.') ?></td>
              <td>
                <a href="" class="btn btn-secondary btn-xs" data-toggle="modal" data-target="#detailpengeluaran<?= $a['id'] ?>"><i class="far fa-eye"> Detail</i></a>
                <a href="<?= base_url() ?>keuangan/editDataPengeluaran/<?= $a['id'] ?>" class="btn btn-success btn-xs"><i class="far fa-edit"> Edit</i></a>
                <a href="<?= base_url() ?>keuangan/hapusDatapengeluaran/<?= $a['id'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin hapus?');">Hapus</i></a>
              </td>
              <!-- Detail Data -->
              <div class="modal fade" id="detailpengeluaran<?= $a['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Detail Keuangan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= $a['tanggal'] ?></li>
                        <li class="list-group-item"><?= $a['keterangan'] ?></li>
                        <li class="list-group-item"><?= $a['nominal_keluar'] ?></li>
                        </li>
                      </ul>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </tr>
          <?php $i++;
          endforeach
          ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.container-fluid -->
  <!-- /.content -->
</div>