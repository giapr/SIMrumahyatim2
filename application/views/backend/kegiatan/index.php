

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
      <a href="<?php echo base_url()?>kegiatan/tambahDatakegiatan" class="btn btn-secondary">Tambah Data Kegiatan</a>           
    </div>
    <!-- Main content -->

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                   <?php 
                    $i=1;
                    ?>
                   
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Tanggal Kegiatan</th>
                    <th>Deskripsi Kegiatan</th>
                    <th>Aksi </th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($kegiatan as $a) : ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $a['nama_kegiatan'] ?></td>
                    <td><?= $a['tanggal_kegiatan'] ?></td>
                    <td><?= $a['deskripsi_kegiatan'] ?></td>
                    <td>
                       <a href="<?= base_url()?>Kegiatan/detailDataKegiatan/<?= $a['id_kegiatan'] ?>" class="btn btn-secondary btn-xs"><i class="far fa-edit"> Detail</i></a>
                      <a href="<?= base_url()?>kegiatan/editDataKegiatan/<?= $a['id_kegiatan'] ?>" class="btn btn-success btn-xs"><i class="far fa-edit"> Edit</i></a>
                      <a href="<?= base_url()?>kegiatan/hapusDataKegiatan/<?= $a['id_kegiatan'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin hapus?');">Hapus</i></a>                     
                    </td>       
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
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
