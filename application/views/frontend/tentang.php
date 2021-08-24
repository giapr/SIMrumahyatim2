<!-- Home -->
<article id="top" class="wrapper style1">
    <div class="container">
        <div class="row">
            <?php foreach ($profil as $b) : ?>
                <div class="col-4 col-5-large col-12-medium">
                    <span class="image fit"> <img src="<?= base_url('/assets/buktipemasukan/' . $b['foto']) ?>" class="card-img-top" alt="<?= $b['foto']; ?>">
                    </span>
                </div>

                <div class="col-8 col-7-large col-12-medium">
                    <header>
                        <h1><strong>RUMAH YATIM</strong></h1>
                    </header>
                    <p></p>
                </div>
        </div>
    </div>
</article>

<!-- Work -->
<article id="work" class="wrapper style2">
    <div class="container">
        <header>
            <h2>TENTANG KAMI</h2>
            <p><?= $b['program_kerja'] ?></p>
        </header>
        <div class="row aln-center">
            <div class="col-4 col-6-medium col-12-small">
                <section class="box style1">
                    <h3>TUJUAN</h3>
                    <p><?= $b['tujuan'] ?></p>
                </section>
            </div>
            <div class="col-4 col-6-medium col-12-small">
                <section class="box style1">
                    <h3>VISI</h3>
                    <p><?= $b['visi'] ?></p>
                </section>
            </div>
            <div class="col-4 col-6-medium col-12-small">
                <section class="box style1">
                    <h3>MISI</h3>
                    <p><?= $b['misi'] ?></p>
                </section>
            </div>
        </div>
    <?php endforeach ?>
    </div>
</article>

<!-- Portfolio -->
<article id="portfolio" class="wrapper style3">
    <div class="container">
        <header>
            <h2>Kegiatan</h2>
            <p>Kegiatan yang dilakukan di rumah yatim</p>
        </header>
        <div class="row">
            <?php foreach ($kegiatan as $a) : ?>
                <div class="col-4 col-6-medium col-12-small">
                    <article class="box style2">
                        <a href="<?php echo base_url(); ?>/assets_user/#" class="image featured"><img src="<?= base_url('/assets/buktipemasukan/' . $a['foto']) ?>" class="card-img-top" alt="<?= $a['foto']; ?>"></a>
                        <h3><?= $a['nama_kegiatan'] ?></h3>
                        <p><?= $a['tanggal_kegiatan'] ?></p>
                    </article>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</article>

<!-- Contact -->
<article id="contact" class="wrapper style4">
    <div class="container medium">
        <div class="col-12">
            <hr />
            <h3>Find me on ...</h3>
            <ul class="social">
                <li><a href="<?php echo base_url(); ?>/assets_user/#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="<?php echo base_url(); ?>/assets_user/#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>

                <li><a href="<?php echo base_url(); ?>/assets_user/#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="<?php echo base_url(); ?>/assets_user/#" class="icon brands fa-youtube"><span class="label">YouTube</span></a></li>
                <li><a href="<?php echo base_url(); ?>/assets_user/#" class="icon brands fa-blogger"><span class="label">Blogger</span></a></li>


            </ul>
            <hr />
        </div>
        <footer>
            <ul id="copyright">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: <a href="<?php echo base_url(); ?>/assets_user/http://html5up.net">HTML5 UP</a></li>
            </ul>
        </footer>
    </div>
</article>