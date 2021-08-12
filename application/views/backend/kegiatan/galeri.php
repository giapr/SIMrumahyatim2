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
        <?php foreach ($kegiatan as $b ) : ?> 
            <div class="col-sm-3">
                <div class="card" style="width: 22rem;">
                    <img src="<?= base_url('/assets/buktipemasukan/'.$b['foto'])?>" class="card-img-top" alt="<?= $b['foto'];?>">                   
                        <div class="card-body">
                            <h5 class="card-title"><?= $b['nama_kegiatan'] ?></h5>
                            <p class="card-text"><?= $b['tanggal_kegiatan'] ?></p>
                            <a href="<?= base_url()?>Kegiatan/detailDataKegiatan/<?= $b['id_kegiatan'] ?>" class="btn btn-success btn-xs">Detail</a>
                            <a href="<?= base_url()?>Kegiatan/hapusFoto/<?= $b['id'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin hapus?');">Hapus</i></a>
                        </div>
                </div>
            </div>
        <?php endforeach ?>   
    </div>
</div>


                