

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
            <?php echo form_open_multipart('kegiatan/editDatakegiatan/'.$kegiatan['id_kegiatan']);?>
                <div class="row mb-2">
                  <div class="col-sm-12">
                        <div class="card">
                         <input type="hidden" name="id_kegiatan" value="<?= $kegiatan['id_kegiatan'];?>">
                            <div class="card-header">
                                <label>Nama Kegiatan*</label>
                                <input type="text" name="nama_kegiatan" class="form-control" value="<?= $kegiatan['nama_kegiatan'];?>" >
                            </div>
                            <div class="card-body">
                              <p class="card-text"><label>Tanggal Kegiatan*</label>
                                <input type="date" name="tanggal_kegiatan" class="form-control" value="<?= $kegiatan['tanggal_kegiatan'];?>" ></p>
                              <p class="card-text"><label>Deskripsi Kegiatan*</label>
                                <input type="text" name="deskripsi_kegiatan" class="form-control" value="<?= $kegiatan['deskripsi_kegiatan'];?>"></p>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                        </div>
                      </div>
              </div>


            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-4">
                  <label>Tambahkan Foto*</label>
                  <div class="card" style="width: 22rem; height: 15rem;">
                    <div class="card-body">
                        <input type="file" name="image[]" multiple>
                    </div>
                  </div>
                </div>
              </div> 

          
              <div class="form-group">
                <button type="" class="btn btn-secondary btn-flat">Batal</button>
                <button type="submit" class="btn btn-success btn-flat">Simpan</button> 
              </div>  
      <?php echo form_close();?>
              

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
