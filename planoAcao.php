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
  <link href="view/css/planoAcao.css" rel="stylesheet">
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
      <div class="buttons">
        <button class="btn btn-md bg-laranja" onclick="add_forca('ameaca')"><i class="fa fa-plus"></i></button>
        <button class="btn btn-md bg-laranja" onclick="modalEdit('ameaca')"><i class="fa fa-pen"></i></button>
        <button class="btn btn-md bg-laranja" onclick="modalDel('ameaca')"><i class="fa fa-trash"></i></button>
      </div>

      <table class="table col-12" >
        <thead align="center">
          <tr>
            <th scope="col">TIPO</th>
            <th scope="col">PRECO</th>
            <th scope="col">ACÃO</th>
            <th scope="col">INVESTIMENTO</th>
          </tr>
        </thead>
        <tbody align="center">
          <tr>
            <td>tipo</td>
            <td>preço</td>
            <td>ação</td>
            <td>investimento</td>
          </tr>
          <tr>
            <td>tipo</td>
            <td>preço</td>
            <td>ação</td>
            <td>investimento</td>
          </tr>
          <tr>
            <td>tipo</td>
            <td>preço</td>
            <td>ação</td>
            <td>investimento</td>
          </tr>
          <tr>
            <td>tipo</td>
            <td>preço</td>
            <td>ação</td>
            <td>investimento</td>
          </tr>
          <tr>
            <td>tipo</td>
            <td>preço</td>
            <td>ação</td>
            <td>investimento</td>
          </tr>
          <tr>
            <td>tipo</td>
            <td>preço</td>
            <td>ação</td>
            <td>investimento</td>
          </tr>
          <tr>
            <td>tipo</td>
            <td>preço</td>
            <td>ação</td>
            <td>investimento</td>
          </tr>
        </tbody>
      </table>
      
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
  </script>

</body>

</html>
