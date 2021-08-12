<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url(); ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/assets/#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Jumlah anak yatim</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url(); ?>/assets/#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Jumlah Duafa</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url(); ?>/assets/#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Jumlah donatur</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url(); ?>/assets/#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Jumlah saldo keuangan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url(); ?>/assets/#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->

            <!-- /.card -->
            <div class="card">
              <h5 class="card-header text-center">PROFILE</h5>
              <?php
              foreach ($profil as $a) :
              ?>
                <div class="card">
                  <h5 class="card-header">FOTO PROFILE</h5>
                  <div class="card-body">
                    <p class="card-text"><?= $a['misi'] ?>
                  </div>
                </div>
                <div class="card">
                  <h5 class="card-header">LATAR BELAKANG</h5>
                  <div class="card-body">
                    <p class="card-text"><?= $a['latar_belakang'] ?>
                  </div>
                </div>
                <div class="card">
                  <h5 class="card-header">PROGRAM KERJA</h5>
                  <div class="card-body">
                    <p class="card-text"><?= $a['program_kerja'] ?>
                  </div>
                </div>
                <div class="card">
                  <h5 class="card-header">TUJUAN</h5>
                  <div class="card-body">
                    <p class="card-text"><?= $a['tujuan'] ?>
                  </div>
                </div>
                <div class="card">
                  <h5 class="card-header">VISI</h5>
                  <div class="card-body">
                    <p class="card-text"><?= $a['visi'] ?>
                  </div>
                </div>
                <div class="card">
                  <h5 class="card-header">MISI</h5>
                  <div class="card-body">
                    <p class="card-text"><?= $a['misi'] ?>
                  </div>
                </div>
              <?php endforeach ?>
              <div class="card-footer text-muted">
                <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> edit data profile</button>
              </div>
            </div>

            <!-- TO DO List -->
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Laporan Kas
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo base_url(); ?>/assets/#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>/assets/#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <?php
    $this->db->select('tanggal,nominal_masuk');
    $dataLaporanChart = $this->db->get('tbl_pemasukan')->result();
    foreach ($dataLaporanChart as $k => $v) {
      $arrlap[] = ['label' => $v->tanggal, 'y' => $v->nominal_masuk];
    }


    ?>

    <!-- Main content -->


    <script type="text/javascript">
      window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
          theme: "light2", // "light2", "dark1", "dark2"
          animationEnabled: false, // change to true		
          title: {
            text: "Basic Column Chart"
          },
          data: [{
            // Change type to "bar", "area", "spline", "pie",etc.
            type: "column",

            dataPoints: <?= json_encode($arrlap, JSON_NUMERIC_CHECK); ?>

          }]

        });
        chart.render();

      }
    </script>
    </head>

    <body>
      <div id="chartContainer" style="height: 370px; width: 100%;"></div>
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
    </body>
  </div>
  <!-- /.content-wrapper -->



</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->