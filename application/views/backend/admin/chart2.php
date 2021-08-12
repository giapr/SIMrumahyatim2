<?php
$this->db->select('tanggal,nominal_masuk');
$dataLaporanChart = $this->db->get('tbl_pemasukan')->result();
foreach ($dataLaporanChart as $k => $v) {
  $arrlap[] = ['label' => $v->tanggal, 'y' => $v->nominal_masuk];
}


?>
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
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->

<?php
$this->db->select('tanggal,nominal_masuk');
$dataLaporanChart = $this->db->get('tbl_pemasukan')->result();
foreach ($dataLaporanChart as $k => $v) {
  $arrlap[] = ['label' => $v->tanggal, 'y' => $v->nominal_masuk];
}
?>

<script>
  window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      theme: "light2",
      title: {
        text: "Simple Line Chart"
      },
      data: [{
        type: "line",
        indexLabelFontSize: 16,
        dataPoints: <?= json_encode($arrlap, JSON_NUMERIC_CHECK); ?>

      }]
    });
    chart.render();

  }
</script>
</head>

<body>
  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>