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
    #containerCRUD
    {
      height: 40px;
      margin-bottom: 0;
    }
    #containerTabela
    {
      margin-top: -250px;
    }
    #btn-adicionar-add
    {
      margin-top: 10px;
    }
    #btn-adicionar-edit
    {
      margin-top: 10px;
    }
    #btn-remover
    {
      margin-top: 10px;
    }
    #valoresAdd, #valoresEdit 
    {
      margin-top: 10px;
    }
  </style>

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
    <div class="row col-10" style="padding: 15px">


      <div id="containerCRUD" class="col-12 top">
        <button class="btn btn-md bg-laranja" onclick="addEmpresa()"><i class="fa fa-plus"></i></button>
        <button class="btn btn-md bg-laranja" onclick="edit_tabelaMissaoValores(id)"><i class="fa fa-pen"></i></button>
        <button class="btn btn-md bg-laranja" onclick="del_tabelaMissaoValores()"><i class="fa fa-trash"></i></button>
      </div>


      <!-- tabela -->
      <div class="col-12" id="containerTabela">
        <table class="table" id="tabelaMissaoValor" data-toggle="table" data-toolbar="#toolbar" data-search="false" data-click-to-select="true">
          <thead class="bg-laranja">
            <tr>
              <th data-field="chkbx" data-checkbox="true"></th>
              <th data-field="nome">RAZÃO SOCIAL</th>
              <th data-field="RazSocial">CNPJ</th>
              <th data-field="missao">MISSÃO</th>
              <th data-field="visao">VISÃO</th>
              <th data-field="valores">VALORES</th>
              <!-- <th data-formatter="functionAcao">AÇÃO</th> -->
            </tr>
          </thead>
        </table>
      </div>
      <!-- INÍCIO MODAIS  -->
      <!-- Modal adicionar Missao&Valores -->
      <div id="modalAdd" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Adicionar Missão & Valores da Empresa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="formMissaoValores">
                <div class="form-group">
                  <form id="formMissaoValores">
                    <div class="form-group">
                      <p>Razão Social</p>
                      <input class="form-control" type="text" name="razao" placeholder="Razão Social">
                    </div>
                    <div class="form-group">
                      <p>CNPJ</p>
                      <input class="form-control" type="text" name="cnpj" placeholder="99.999.999/9999-99">
                    </div>
                    <div class="form-group">
                      <p>Missão</p>
                      <textarea class="form-control" name="missao" placeholder="Missão" rows="2" ></textarea>
                      <!-- <input class="form-control" type="text" name="missao" placeholder="Missão"> -->
                    </div>
                    <div class="form-group">
                      <p>Visão</p>
                      <textarea class="form-control" name="visao" placeholder="Visão" rows="2"></textarea>
                      <!-- <input class="form-control" type="text" name="visao" placeholder="Visão"> -->
                    </div>
                    <div class="form-group">
                      <p>Valores</p>
                      <!-- <input class="form-control" type="text" name="valores" placeholder="Valores da Empresa"> -->
                      <input class="form-control" type="text" name="valores[]" id="valores" placeholder="Valor - Detalhe">
                      <div id="containerBotaoAdd">
                      <button type="button" class="btn btn-primary" name="btn-adicionar-add" id="btn-adicionar-add"> + </button>
                      <!-- <button type="button" class="btn btn-danger" name="btn-remover"> - </button> -->
                      </div>
                    </div>

                  </form>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button onclick="btn_addMissaoValores()" class="btn btn-primary" name="registrar">Salvar</button>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>


      <!-- Modal editar Missao&Valores -->
      <div id="modalEdit" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Editar Missão & Valores da Empresa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="formMissaoValores">
                <div class="form-group">
                  <form id="formMissaoValores">
                    <div class="form-group">
                      <p>Razão Social</p>
                      <input class="form-control" type="text" name="razao" id="razao" placeholder="Razão Social">
                    </div>
                    <div class="form-group">
                      <p>CNPJ</p>
                      <input class="form-control" type="text" name="cnpj" id="cnpj" placeholder="99.999.999/9999-99">
                    </div>
                    <div class="form-group">
                      <p>Missão</p>
                      <textarea class="form-control" name="missao" id="missao" placeholder="Missão" rows="2" cols="106"></textarea>
                    </div>
                    <div class="form-group">
                      <p>Visão</p>
                      <textarea class="form-control" name="visao" id="visao" placeholder="Visão" rows="2" cols="106"></textarea>
                    </div>
                    <div class="form-group">
                      <p>Valores</p>
                      <!-- <input class="form-control" type="text" name="valores" id="valores" placeholder="Valores da Empresa"> -->
                      <input class="form-control" type="text" name="valores[]" id="valores" placeholder="Valor - Detalhe">
                      <div id="containerBotaoEdit">
                      <button type="button" class="btn btn-primary" name="btn-adicionar-edit" id="btn-adicionar-edit"> + </button>
                      <!-- <button type="button" class="btn btn-danger" name="btn-remover"> - </button> -->
                      </div>
                    </div>
                  </form>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button onclick="edit_tabelaMissaoValores(id)" class="btn btn-primary" name="alterar">Salvar</button>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- FIM MODAIS -->

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

  <!-- scripts próprios -->
  <script>
    // carregamento da tabela
    $("#tabelaMissaoValor").bootstrapTable();
    //$("#tabelaMissaoValor").bootstrapTable("refresh", { url: "dados.json"  });
    $("#tabelaMissaoValor").bootstrapTable("refresh",{ url:'controller/controllerIndexReload.php' });
    
    
     //script botão adicionar valor modal add
     $( "#btn-adicionar-add" ).click(function() {
      $( "#containerBotaoAdd" ).append( '<input class="form-control" type="text" name="valores[]" id="valoresAdd" placeholder="Valor - Detalhe"><button onclick="removerValorAdd()" class="btn btn-danger" name="btn-remover" id="btn-remover"> - </button>' );
    });

    //script botão adicionar valor modal edit
    $( "#btn-adicionar-edit" ).click(function() {
      $( "#containerBotaoEdit" ).append( '<input class="form-control" type="text" name="valores[]" id="valoresEdit" placeholder="Valor - Detalhe"><button onclick="removerValorEdit()" class="btn btn-danger" name="btn-remover" id="btn-remover"> - </button>' );
    });

    //script botão remover valor modal add
    function removerValorAdd() {
      $( "#valoresAdd" ).remove();
    };

    //script botão remover valor modal edit
    function removerValorEdit() {
      $( "#valoresEdit" ).remove();
    };


    // function functionAcao(campo, obj, indice)
    // {
    //   return `<button class="btn btn-sm btn-warning" onclick="del_tabelaMissaoValores(${obj.id})"><i class="fa fa-trash"></i></button>` + `<button style="margin-left: 10px;" class="btn btn-sm btn-warning" onclick="edit_tabelaMissaoValores(${obj.id})"><i class="fa fa-pen"></i></button>`;
    // }


    // CHAMAR FORM MISSAO&VALORES
    function addEmpresa() {
      let elementoLista = $("#".elementoMissao);
      $("#modalAdd").modal("show");
      let formulario = $("#formMissaoValores")[0];
      let formData = new FormData(formulario);
    }

    // ADD 
    function btn_addMissaoValores() {
      let formData = new FormData($("#formMissaoValores")[0]);
      $.ajax({
        url: "controller/missaoEvalores_Add.php",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        dataType: 'JSON',
        success: function(ret) {
          console.log(ret);
          console.log("sucesso");
        },
        error: function(xhr, desc, err) {
          console.log(xhr)
          console.log("tem alguma coisa errada " + desc + "nErro:" + err);

        }
      })
    }

    // delete
    function del_tabelaMissaoValores() {
      let selecionado = $("#tabelaMissaoValor").bootstrapTable('getSelections');
      if (selecionado.length == 0) {
        bootbox.alert("Selecione o item a ser DELETADO.")
      } else {
        bootbox.confirm("Deseja mesmo deletar este(s) item(ns)?", function(resposta) {
          if (resposta = true) {
            bootbox.alert("Programar DELEÇÂO")
          }
        })
      }
    }

    //edit
    function edit_tabelaMissaoValores(id) {
      let elementoLista = $("#".elementoMissaoEdit);
      $("#modalEdit").modal("show");
      let formulario = $("#formMissaoValores")[0];
      let formData = new FormData(formulario);
      //alert(id);
    }
  </script>

</body>

</html>