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
    <div class="col-2" style="padding: 0">
      <?php 
        // Sidebar
        require_once "view/components/sidebar.php";
      ?>
    </div>
    <div class="row col-10" style="padding: 15px 5px">
      
      <!-- formulario -->
      <div class="col-3">
      <form>
          <div class="form-group">
            <p>Nome</p>
            <input class="form-control" type="text" name="nome">
          </div>
          <div class="form-group">
            <p>Razão Social</p>
            <input class="form-control" type="text" name="razao">
          </div>
          <div class="form-group">
            <p>Missão</p>
            <input class="form-control" type="text" name="missao">
          </div>
          <div class="form-group">
            <p>Visão</p>
            <input class="form-control" type="text" name="visao">
          </div>
          <div class="form-group">
            <p>Valores</p>
            <input class="form-control" type="text" name="valores">
          </div>

          <button class="btn btn-primary" name="registrar">Salvar</button>
        </form>
      </div>
      <!-- tabela -->
      <div class="col-9">
        <div class="col-12">
          <button class="btn btn-warning" onclick="add_tabelaMissaoValores()"><i class="fa fa-plus"></i></button>
          <button class="btn btn-warning" onclick="edit_tabelaMissaoValores()"><i class="fa fa-pen"></i></button>
          <button class="btn btn-warning" onclick="del_tabelaMissaoValores()"><i class="fa fa-trash"></i></button>
        </div>
        <table class="table" id="tabelaMissaoValor" data-toggle="table" data-toolbar="#toolbar" data-search="false" data-click-to-select="true">
          <thead class="table-dark">
            <tr>
              <th data-field="chkbx" data-checkbox="true"></th>
              <th data-field="nome">NOME</th>
              <th data-field="RazSocial">RAZÃO SOCIAL</th>
              <th data-field="missao">MISSÃO</th>
              <th data-field="visao">VISÃO</th>
              <th data-field="valores">VALORES</th>
            </tr>
          </thead>
        </table>
      </div>
      
      <!-- <img src="view/imgs/logomarca.png" alt="" style="display: block;width: 350px; margin: 3.8vw auto; opacity: 1"> -->
    </div>
  </div>

  <!-- INICIO DOS MODAIS -->
  
  <!-- inicio modal add registro da tabela de missao$valores -->
  <div class="modal  fade" id="addMissaoValor" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTitulo">Adicionar Missão&Valores</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         add formulário aqui
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Ok</button>
        </div>
      </div>
    </div>
  </div>
  <!-- fim modal add registro da tabela de missao$valores -->
  
  <!-- inicio modal edit registro da tabela de missao$valores -->
  <!-- fim modal edit registro da tabela de missao$valores -->
  
  <!-- inicio modal delete registro da tabela de missao$valores -->
  <!-- fim modal delete registro da tabela de missao$valores -->
  
  <!-- FIM  DOS MODAIS -->
  

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
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
    // carregamento da tabela
    $("#tabelaMissaoValor").bootstrapTable();
    $("#tabelaMissaoValor").bootstrapTable("refresh", {url:"dados.json"});

    // chamada dos modais
    function add_tabelaMissaoValores()
    {
      $("#addMissaoValor").modal('show');
    }    
    function edit_tabelaMissaoValores(){}
    function del_tabelaMissaoValores(){} 

  </script>

</body>

</html>
