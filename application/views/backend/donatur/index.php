

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
      <a href="<?php echo base_url()?>Donatur/tambahDataDonatur" class="btn btn-secondary">Tambah Data Donatur</a>           
    </div>
    <!-- Main content -->

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>nama</th>
                    <th>alamat</th>
                    <th> Aksi </th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                    $i=1;
                    foreach ($donatur as $a) : ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $a['nama'] ?></td>
                    <td><?= $a['alamat'] ?></td>
                    <td>
                      <a href="" class="btn btn-secondary btn-xs" data-toggle="modal" data-target="#detaildonatur<?= $a['id'] ?>"><i class="far fa-eye"> Detail</i></a>
                      <a href="<?= base_url()?>Donatur/editDataDonatur/<?= $a['id'] ?>" class="btn btn-success btn-xs"><i class="far fa-edit"> Edit</i></a>
                      <a href="<?= base_url()?>Donatur/hapusDataDonatur/<?= $a['id'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin hapus?');">Hapus</i></a> 
                    </td>

                        <!-- Detail Data -->
                             <div class="modal fade" id="detaildonatur<?= $a['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail Data Anak Yatim</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            
                              <div class="modal-body">
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><?= $a['nama'] ?></li>
                                  <li class="list-group-item"><?= $a['alamat'] ?></li>
                                  </li>  
                                </ul>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
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
 
