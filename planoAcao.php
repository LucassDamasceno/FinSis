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

      <!-- formulario -->
      <div class="col-3">
        <div class="col-12 buttons">
          <div id="containerCRUD" class="footer">
            <button class="btn btn-md bg-laranja" onclick=""><i class="fa fa-plus"></i></button>
            <button class="btn btn-md bg-laranja" onclick=""><i class="fa fa-pen"></i></button>
            <button class="btn btn-md bg-laranja" onclick=""><i class="fa fa-trash"></i></button>
          </div>
        </div>
        <form id="formPlanoDeAção">

          <div class="form-group">
            <p>Selecionar</p>
            <select name="select" class="form-control">
              <option value="valor1">Forças</option>
              <option value="valor2" selected>Fraquezas</option>
              <option value="valor3">Oportunidades</option>
              <option value="valor3">Ameaças</option>
            </select>
          </div>

          <div class="form-group">
            <p>O que fazer</p>
            <input class="form-control" type="text" name="nome">
          </div>
          <div class="form-group">
            <p>Por que fazer</p>
            <input class="form-control" type="text" name="razao">
          </div>
          <div class="form-group">
            <p>Quem fará</p>
            <input class="form-control" type="text" name="missao">
          </div>
          <div class="form-group">
            <p>Como fará</p>
            <input class="form-control" type="text" name="visao">
          </div>

          <div class="form-group">
            <p>Aonde</p>
            <input class="form-control" type="text" name="visao">
          </div>
          <div class="form-group">
            <p>Prazo final</p>
            <input class="form-control" type="text" name="visao">
          </div>
          <div class="form-group">
            <p>Valor/Custo</p>
            <input class="form-control" type="text" name="visao">
          </div>
        </form>

        <button onclick="btn_addPlanoDeAcao()" class="btn btn-primary" name="registrar">Adicionar</button>
      </div>
      <!-- tabela -->
      <div class="col-9">
        <div class="col-12">
        </div>
        <table class="table" id="tabelaPlanoDeAcao" data-toggle="table" data-toolbar="#toolbar" data-search="false" data-click-to-select="true">
          <thead class="table-dark">
            <tr>
              <th data-field="chkbx" data-checkbox="true"></th>
              <th data-field="nome">O QUE FAZER</th>
              <th data-field="RazSocial">POR QUE FAZER</th>
              <th data-field="missao">QUEM FARÁ</th>
              <th data-field="visao">COMO FARÁ</th>
              <th data-field="valores">AONDE</th>
              <th data-formatter="functionAcao">PRAZO FINAL</th>
              <th data-field="valores">VALOR/CUSTO</th>
            </tr>
          </thead>
        </table>
      </div>
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