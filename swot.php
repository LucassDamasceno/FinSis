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
    
      <div id="containerSWOT" class="row">
      <!-- trocar os elementos por <li> -->
        <div class="card col-3"> 
          <div class="card-header bg-laranja">
            FORÇAS
          </div>
          <div class="card-body">
            <ul id="listaForca">
              <li id="a">
                <input type="checkbox" name="" id=""> isso aqui era pra ser a descriçao de um ponto de FORÇAS da empresa
              </li>
            </ul>
          </div>
          <div id="containerCRUD" class="footer">
            <button class="btn btn-md bg-laranja" onclick="add_forca('listaForca')"><i class="fa fa-plus"></i></button>
            <button class="btn btn-md bg-laranja" onclick="modalEdit('listaForca')"><i class="fa fa-pen"></i></button>
            <button class="btn btn-md bg-laranja" onclick="modalDel('listaForca')"><i class="fa fa-trash"></i></button>
          </div>
        </div>

        <div class="card col-3">
          <div class="card-header bg-laranja">
              FRAQUEZAS
          </div>
          <div class="card-body">
            <div>
              <p>
              <input type="checkbox" id="" name="">
              isso aqui era pra ser a descriçao de um ponto de FRAQUEZAS da empresa
              </p>
            </div>
          </div>
            <div id="containerCRUD" class="footer">
              <button class="btn btn-md bg-laranja" onclick="add_forca('fraqueza')"><i class="fa fa-plus"></i></button>
              <button class="btn btn-md bg-laranja" onclick="modalEdit('fraqueza')"><i class="fa fa-pen"></i></button>
              <button class="btn btn-md bg-laranja" onclick="modalDel('fraqueza')"><i class="fa fa-trash"></i></button>
            </div>          
        </div>

        <div class="card col-3">
          <div class="card-header bg-laranja">
              OPORTUNIDADES
          </div>
          <div class="card-body">
            <div>
              <p>
              <input type="checkbox" id="" name="">
              isso aqui era pra ser a descriçao de um ponto de OPORTUNIDADES da empresa
              </p>
            </div>
          </div>
          <div id="containerCRUD" class="footer">
            <button class="btn btn-md bg-laranja" onclick="add_forca('oportunidade')"><i class="fa fa-plus"></i></button>
            <button class="btn btn-md bg-laranja" onclick="modalEdit('oportunidade')"><i class="fa fa-pen"></i></button>
            <button class="btn btn-md bg-laranja" onclick="modalDel('oportunidade')"><i class="fa fa-trash"></i></button>
          </div>
        </div>

        <div class="card col-3">
          <div class="card-header bg-laranja">
              AMEAÇAS
          </div>
          <div class="card-body">
            <div>
              <p>
              <input type="checkbox" id="" name="">
              isso aqui era pra ser a descriçao de um ponto de AMEAÇAS da empresa
              </p>
            </div>
          </div>
          <div id="containerCRUD" class="footer">
            <button class="btn btn-md bg-laranja" onclick="add_forca('ameaca')"><i class="fa fa-plus"></i></button>
            <button class="btn btn-md bg-laranja" onclick="modalEdit('ameaca')"><i class="fa fa-pen"></i></button>
            <button class="btn btn-md bg-laranja" onclick="modalDel('ameaca')"><i class="fa fa-trash"></i></button>
          </div>
        </div>
      </div>

      <!-- <img src="view/imgs/logomarca.png" alt="" style="display: block;width: 350px; margin: 3.8vw auto; opacity: 1"> -->
    </div>
  </div>

  <!-- INICIO DE MODAIS -->

  <!-- modal adicionar -->
  <div id="modalAdd" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">ADICIONAR</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="formForca">
                  <div class="form-group">
                        <label for="form_descricao">Descrição</label>
                        <input type="text" id="form_descricao" name="form_descricao" class="form-control" >
                  </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button id="btn_formulario" class="btn btn-primary" onclick="add_forca()">Cadastrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modla editar -->
  <div id="modalEdit" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">ADICIONAR</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>form aqui</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Ok</button>
        </div>
      </div>
    </div>
  </div>

  <!-- FIM DE MODAIS -->

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
    function add_forca(elementoSWOT)
    {
      let elementoLista = $("#".elementoSWOT);
      $("#modalAdd").modal("show");
      let formulario = $("#formForca")[0];
      let formData = new FormData(formulario);
        $.ajax({
                    url: "controller/Swot_add.php",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    dataType: 'JSON',
                    success: function(ret){
                        // console.log(ret)
                        console.log("registro feito com sucesso!")
                    },
                    error: function(xhr, desc, err)
                    {
                        console.log(xhr)
                        console.log("tem alguma coisa errada"+desc + "nErro:" + err);
                    }
                })
    }
    
    function modalEdit(elementoSWOT){}
    function modalDel(elementoSWOT){}
    



  </script>

</body>

</html>
