

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

    

        <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-12">
                    <div class="card text-center">
                        <div class="card-header">
                            <h4><?= $kegiatan['nama_kegiatan'] ?></h4>
                        </div>
                        <div class="card-body">
                          <p class="card-text"><h5><?= $kegiatan['tanggal_kegiatan'] ?></h5></p>
                          <p class="card-text"><?= $kegiatan['deskripsi_kegiatan'] ?></p>
                          
                        </div>
                        <div class="card-footer text-muted">
                         2 days ago
                        </div>
                    </div>
              </div>
            </div> 
          </div>
                    
          <div class="container-fluid">
             <div class="row mb-2">
                <?php foreach ($gambar as $b ) : ?> 
                <div class="col-sm-4">
            
                  <div class="card" style="width: 25rem; ">
                      <img src="<?= base_url('/assets/buktipemasukan/'.$b['foto'])?>" class="card-img-top" alt="<?= $b['foto'];?>">
                  </div>
              
                </div>
                <?php endforeach ?> 
              </div>
          </div>
        </div>
          

    

              

        

