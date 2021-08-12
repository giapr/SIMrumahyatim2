

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
    
    
      <form class="form-inline" action="<?= base_url('keuangan/search') ?>" method="post">

       <div class="form-group mb-2">
            <input class="form-control" type="date" id="tanggal_awal"  name="tanggal_awal" placeholder="$tanggal_awal">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <input class="form-control" type="date" id="tanggal_akhir"  name="tanggal_akhir" placeholder="$tanggal_akhir">
        </div>
        <button type="submit" class="btn btn-secondary mb-2">Search</button>
      </form>


            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                   <thead>
                  <tr>
                    <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">pemasukan</th>
                        <th scope="col">pengeluaran</th>
                        <th scope="col">saldo</th>
                        
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                    $i=1;
                     $saldo_awal = 0;
                    foreach ($laporan as $a) : 
                     
                         
                                    if ($a['nominal_keluar'] != 0) {
                                        $nominal = $a['nominal_keluar'];

                                        $saldo_awal = $saldo_awal - $nominal;
                                    } else {
                                        $nominal = $a['nominal_masuk'];
                                        $saldo_awal = $saldo_awal + $nominal;
                                        
                                    }
                    endforeach;

                                    ?>
                                    <tr>
                                    <th scope="row">-</th>
                                    <td>-</td>
                                    

                                    <td>Saldo Kas Terakhir</td>
                                    <td>-</td>
                                    <td>-</td>

                                    <td style="text-align:right;">Rp <?= number_format($saldo_awal, 0, ',', '.') ?>
                                    </td>
                                </tr>
                                <?php
                                if ($saldo_awal != 0) {
                                    $saldo = $saldo_awal;
                                } else {
                                    $saldo = 0;
                                }
                                $i = 1;
                                foreach ($laporan as $a) :

                                    $date = date_create($a['tanggal']);

                                    if ($a['nominal_keluar'] != 0) {
                                        $nominal = $a['nominal_keluar'];

                                        $saldo = $saldo - $nominal;
                                    } else {
                                        $nominal = $a['nominal_masuk'];
                                        $saldo = $saldo + $nominal;
                                        
                                    }
                                    ?>

                  <tr>
                    <td><?= $i?></td>
                    <td><?= $a['tanggal'] ?></td>
                    <td><?= $a['keterangan'] ?></td>
                    <td style="text-align:right;">Rp <?= number_format($a['nominal_masuk'], 0, ',', '.') ?></td>
                    <td style="text-align:right;">Rp <?= number_format($a['nominal_keluar'], 0, ',', '.') ?></td>
                    <td style="text-align:right;">Rp <?= number_format($saldo, 0, ',', '.') ?></td>

                        <!-- Detail Data -->
                             <div class="modal fade" id="detailpemasukan<?= $a['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <li class="list-group-item"><?= $a['tipe_pemasukan'] ?></li>
                                  <li class="list-group-item"><?= $a['keterangan'] ?></li>
                                  <li class="list-group-item"><?= $a['nominal'] ?></li>
                                  </li>  
                                </ul>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            </div>
                          </div>
                          
                        </div>
                    </tr>
                  <?php $i++;
                    endforeach ?>
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
 
