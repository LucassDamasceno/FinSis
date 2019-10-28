<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="view/imgs/faviconLG.png" sizes="16x16" type="image/png" />
  <title>Construtora Pandora</title>
  <!-- Fonts personalizadas para do template-->
  <link href="view/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap 4 CSS-->
  <link href="view/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="view/css/sb-admin.css" rel="stylesheet">
  <!-- API BootstrapTable -->
  <link href="view/vendor/bootstrapTable/bootstrap-table.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <?php 
    // barra do topo
    require_once "view/components/barTop.php";
  ?>

  <div id="wrapper">
    <?php 
      // Sidebar
      require_once "view/components/sidebar.php";
    ?>
    <div id="content-wrapper">
      <!-- <div id="conteudoCarregado" class="container-fluid">
      </div> -->
      <img src="view/imgs/logomarca.png" alt="" style="display: block;width: 350px; margin: 3.8vw auto; opacity: 0.2">
    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

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
</body>

</html>
