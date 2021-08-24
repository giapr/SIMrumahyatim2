<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url(); ?>/assets/index3.html" class="brand-link">
    <img src="<?php echo base_url(); ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Rumah Yatim</span>
  </a>


  <!-- Sidebar -->



  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>admin" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>anakyatim">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Data anak yatim
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('') ?>duafa" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Data Duafa
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>donatur" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Data Donatur
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>admin/data_admin" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Data admin
          </p>
        </a>
      </li>
      <li class="nav-header">Keuangan</li>
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>keuangan/pemasukan" class="nav-link">
          <i class="nav-icon fas fa-columns"></i>
          <p>
            Laporan Pemasukan
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>keuangan/pengeluaran" class="nav-link">
          <i class="nav-icon fas fa-columns"></i>
          <p>
            Laporan Pengeluaran
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>keuangan/laporan" class="nav-link">
          <i class="nav-icon fas fa-columns"></i>
          <p>
            Laporan Akhir
          </p>
        </a>
      </li>

      <li class="nav-header">Kegiatan</li>
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>Kegiatan" class="nav-link">
          <i class="nav-icon far fa-image"></i>
          <p>
            Data Kegiatan
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>Kegiatan/galeri" class="nav-link">
          <i class="nav-icon far fa-image"></i>
          <p>
            Gallery
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>auth/logout" class="nav-link">
          <i class="nav-icon fas fa-chevron-left"></i>
          <p>
            Logout
          </p>
        </a>
      </li>


    </ul>
  </nav>
  <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>