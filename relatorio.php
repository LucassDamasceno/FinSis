<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="icon" href="view/imgs/faviconLG.png" sizes="16x16" type="image/png" /> -->
  <title>Construtora Pandora</title>
  <!-- Fonts personalizadas para do template-->
  <link href="view/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap 4 CSS-->
  <link href="view/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="view/css/sb-admin.css" rel="stylesheet">
  <!-- API BootstrapTable -->
  <link href="view/vendor/bootstrapTable/bootstrap-table.min.css" rel="stylesheet">

  <style>
    #containerRelatorio
    {
      padding: 0;
    }
    .row
    {
      margin: 0;
    }
  </style>

  <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Swot', 'Investimento'],
          ['Força',     11],
          ['Fraqueza',      8],
          ['Oportunidade',  2],
          ['Ameaças', 4]
        ]);

        var options = {
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script> -->
</head>

<body id="page-top">
  <?php 
    // barra do topo
    require_once "view/components/barTop.php";
  ?>

  <div id="wrapper">
    <div class="col-2" style="padding: 0">
      <?php 
        // Sidebar
        require_once "view/components/sidebar.php";
      ?>
    </div>
    <div class="row col-10" style="padding: 15px 5px">
      
      <div id="containerRelatorio" class="card col-12">
        <div class="card-header bg-laranja">RELATÓRIO</div>
        <div class="card-body">
          <div class="form-group">
            <form>
              <p>Elemento SWOT</p>
              <select id="opcaoSWOT" name="opcaoSWOT" type="text" class="form-control">
                <option val="forcas" class="form-item">Forças</option>
                <option val="fraquezas" class="form-item">Fraquezas</option>
                <option val="oportunidades" class="form-item">Oportunidades</option>
                <option val="ameacas" class="form-item">Ameaças</option>
              </select>
            </form>
            <div style="margin-top: 10px">
              <button class="btn btn-success" onclick="geraRelatorio()">Gerar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- <div id="piechart" style="width: 900px; height: 500px;"></div> -->
      <!-- <img src="view/imgs/logomarca.png" alt="" style="display: block;width: 350px; margin: 3.8vw auto; opacity: 1"> -->
    </div>
  </div>
  
  <!--  -->
    <!-- Bootstrap core JavaScript-->
    <script src="view/vendor/jquery/jquery.min.js"></script>
    <script src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="view/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="view/vendor/chart.js/Chart.min.js"></script>
    <script src="view/vendor/datatables/jquery.dataTables.js"></script>
    <script src="view/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="view/js/sb-admin.min.js"></script>
    <!-- Demo scripts for this page-->
    <script src="view/js/demo/datatables-demo.js"></script>
    <!-- API BootstrapTable -->
    <script src="view/vendor/bootstrapTable/bootstrap-table.min.js"></script>
    <!-- API Bootbox -->
    <script src="view/vendor/bootbox/bootbox.min.js"></script>
  <!--  -->
  
  <!-- scripts prorpios -->
  <script>
    function geraRelatorio()
    {
      // window.location.href
      window.open("geraRelatorio.php");
    }
  </script>

</body>

</html>
