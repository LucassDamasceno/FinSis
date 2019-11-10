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
      <form id="formMissaoValores">
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

        </form>
          <button onclick="btn_addMissaoValores()" class="btn btn-primary" name="registrar">Salvar</button>
      </div>
      <!-- tabela -->
      <div class="col-9">
        <div class="col-12">
         
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
              <th data-formatter="functionAcao">AÇÃO</th>
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
    // carregamento da tabela
    $("#tabelaMissaoValor").bootstrapTable();
    $("#tabelaMissaoValor").bootstrapTable("refresh", {url:"dados.json"});

    function functionAcao(campo, obj, indice)
    {
      return `<button class="btn btn-sm btn-warning" onclick="del_tabelaMissaoValores(${obj.id})"><i class="fa fa-trash"></i></button>` + `<button style="margin-left: 10px;" class="btn btn-sm btn-warning" onclick="edit_tabelaMissaoValores(${obj.id})"><i class="fa fa-pen"></i></button>`;
    }

    // ADD 
    function btn_addMissaoValores()
    {
      let formData = new FormData($("#formMissaoValores")[0]);
      $.ajax({
        url: "controller/missaoEvalores_Add.php",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        type: 'post',
        dataType: 'JSON',
        success: function(ret)
        {
          console.log(ret);
        },
        error: function(err)
        {
          console.log(err)
        }
      })
    }

    // delete
    function del_tabelaMissaoValores()
    {
      let selecionado = $("#tabelaMissaoValor").bootstrapTable('getSelections');
      if(selecionado.length == 0)
      {
        bootbox.alert("Selecione o item a ser DELETADO.")
      }
      else
      {
        bootbox.confirm("Deseja mesmo deletar este(s) item(ns)?", function(resposta){
          if(resposta = true)
          {
            bootbox.alert("Programar DELEÇÂO")
          }
        })
      }
    } 

    //edit
    function edit_tabelaMissaoValores(id)
    {
      alert(id);
    }

    
  </script>

</body>

</html>
