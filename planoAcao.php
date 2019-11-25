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
  <link href="view/css/planoAcao.css" rel="stylesheet">

  <style>
    #containenrBtnControles
    {
      height: 85px;
    }
    #containerTablea
    {
      margin-top: -250px;
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
    <div class="row col-10" style="padding: 15px 5px">

      <!-- formulario -->
      <div class="col-12" id="containenrBtnControles">
        <div class="col-12 buttons">
          <div id="containerCRUD" class="footer">
            <button class="btn btn-md bg-laranja" onclick="addPlanoAcao()"><i class="fa fa-plus"></i></button>
            <button class="btn btn-md bg-laranja" onclick="editPlanoAcao()"><i class="fa fa-pen"></i></button>
            <button class="btn btn-md bg-laranja" onclick="delPlanoAcao()"><i class="fa fa-trash"></i></button>
          </div>
        </div>

      </div>
      <!-- tabela -->
      <div id="containerTablea" class="col-12">
        <div class="col-12">
        </div>
        <table class="table" id="tabelaPlanoDeAcao" data-toggle="table" data-toolbar="#toolbar" data-search="false" data-click-to-select="true">
          <thead class="bg-laranja">
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

  <!-- MODAIS -->
  <!-- modal add -->
  <div id="modalAddPlanoAcao" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Adicionar Plano e Ação</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="formPlanoAcao">
                <div class="form-group">
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
                    <!-- <div class="form-group">
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
                    </div>
                    <div class="form-group">
                      <p>Visão</p>
                      <textarea class="form-control" name="visao" placeholder="Visão" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                      <p>Valores</p>
                      <input class="form-control" type="text" name="valores" placeholder="Valores da Empresa">
                    </div> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <as onclick="btn_ok_modal_PlanoAcao()" class="btn btn-primary" name="registrar">Salvar</as>

                  </form>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>


      <!-- modal editar -->
      <div id="modalEditarPlanoAcao" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Editar Plano e Ação</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="formPlanoAcao">
                <div class="form-group">
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
                    <!-- <div class="form-group">
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
                    </div>
                    <div class="form-group">
                      <p>Visão</p>
                      <textarea class="form-control" name="visao" placeholder="Visão" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                      <p>Valores</p>
                      <input class="form-control" type="text" name="valores" placeholder="Valores da Empresa">
                    </div> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <as onclick="btn_ok_modal_PlanoAcao()" class="btn btn-primary" name="registrar">Salvar Alterações </as>

                  </form>
                </div>
            </div>
            </form>
          </div>
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

    function addPlanoAcao()
    {
      $("#modalAddPlanoAcao").modal("show");
    }

    function editPlanoAcao()
    {
      $("#modalEditarPlanoAcao").modal("show");
    }
    

    function delPlanoAcao()
    {
      let selecionado = $("#tabelaPlanoDeAcao").bootstrapTable('getSelections');
      if (selecionado.length == 0) {
        bootbox.alert("Selecione o plano de ação a ser DELETADO.")
      } else {
        bootbox.confirm("Deseja mesmo deletar este(s) item(ns)?", function(resposta) {
          if (resposta = true) {
            bootbox.alert("Programar DELEÇÂO")
          }
        })
      }
    }


    function btn_ok_modal_PlanoAcao()
    {
      bootbox.alert("Esta função ainda não foi programada. Dev, Desenvolva-a.")
    }

  </script>

</body>

</html>