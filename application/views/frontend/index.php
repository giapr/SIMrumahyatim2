<!-- Home -->
<article id="top" class="wrapper style1">
    <div class="container">
        <div class="row">
            <div class="col-4 col-5-large col-12-medium">
                <span class="image fit"><img src="<?php echo base_url(); ?>/assets_user/images/pic00.jpg" alt="" /></span>
            </div>
            <?php foreach ($profil as $b) : ?>
                <div class="col-8 col-7-large col-12-medium">
                    <header>
                        <h1><strong>RUMAH YATIM</strong></h1>
                    </header>
                    <p><?= $b['latar_belakang'] ?></p>
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
    <footer>
        <p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
        <a href="<?php echo base_url(); ?>/assets_user/#portfolio" class="button large scrolly">See some of my recent work</a>
    </footer>
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
        <footer>
            <p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
            <a href="<?php echo base_url(); ?>/assets_user/#contact" class="button large scrolly">Get in touch with me</a>
        </footer>
    </div>
</article>

<!-- Contact -->
<article id="contact" class="wrapper style4">
    <div class="container medium">
        <header>
            <h2>Have me make stuff for you.</h2>
            <p>Ornare nulla proin odio consequat sapien vestibulum ipsum.</p>
        </header>
        <div class="row">
            <div class="col-12">
                <form method="post" action="#">
                    <div class="row">
                        <div class="col-6 col-12-small">
                            <input type="text" name="name" id="name" placeholder="Name" />
                        </div>
                        <div class="col-6 col-12-small">
                            <input type="text" name="email" id="email" placeholder="Email" />
                        </div>
                        <div class="col-12">
                            <input type="text" name="subject" id="subject" placeholder="Subject" />
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Send Message" /></li>
                                <li><input type="reset" value="Clear Form" class="alt" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
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
        </div>
        <footer>
            <ul id="copyright">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: <a href="<?php echo base_url(); ?>/assets_user/http://html5up.net">HTML5 UP</a></li>
            </ul>
        </footer>
    </div>
</article>