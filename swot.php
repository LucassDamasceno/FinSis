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
    #containerSWOT
    {
      width: 100%;
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


  <!-- INICIO DE MODAIS -->

  <!-- modal adicionar -->
  <div id="modalAdd" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Adicionar <span id="titleElementoSwot"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="formulario">
            <div class="form-group">
                  <label for="form_nome">Nome</label>
                  <input type="hidden" id="form_nome" name="form_nome" class="form-control" disabled>
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
      <div class="modal-content">0
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

      
    <div class="row col-10" id="div "style="padding: 15px 5px">
    
      <div id="containerSWOT" class="row">

        <div class="card col-3"> 
          <div class="card-header bg-laranja">
            FORÇAS
          </div>
          <div id="card-body-forca" class="card-body"></div>
          <div id="containerCRUD" class="footer">
            <button class="btn btn-md bg-laranja" onclick="modal_add('Força')"><i class="fa fa-plus"></i></button>
            <button class="btn btn-md bg-laranja" onclick="modalEdit('Força')"><i class="fa fa-pen"></i></button>
            <button class="btn btn-md bg-laranja" onclick="modalDel('Força')"><i class="fa fa-trash"></i></button>
          </div>
        </div>

        <div class="card col-3">
          <div class="card-header bg-laranja">
              FRAQUEZAS
          </div>
          <div id="card-body-fraqueza" class="card-body fraquezas">
            <div>
              <p>
              <input type="checkbox" id="" name="">
              isso aqui era pra ser a descriçao de um ponto de FRAQUEZAS da empresa
              </p>
            </div>
          </div>
            <div id="containerCRUD" class="footer">
              <button class="btn btn-md bg-laranja" onclick="modal_add('Fraqueza')"><i class="fa fa-plus"></i></button>
              <button class="btn btn-md bg-laranja" onclick="modalEdit('Fraqueza')"><i class="fa fa-pen"></i></button>
              <button class="btn btn-md bg-laranja" onclick="modalDel('Fraqueza')"><i class="fa fa-trash"></i></button>
            </div>          
        </div>

        <div class="card col-3">
          <div class="card-header bg-laranja">
              OPORTUNIDADES
          </div>
          <div id="card-body-oportunidade" class="card-body">
            <div>
              <p>
              <input type="checkbox" id="" name="">
              isso aqui era pra ser a descriçao de um ponto de OPORTUNIDADES da empresa
              </p>
            </div>
          </div>
          <div id="containerCRUD" class="footer">
            <button class="btn btn-md bg-laranja" onclick="modal_add('Oportunidade')"><i class="fa fa-plus"></i></button>
            <button class="btn btn-md bg-laranja" onclick="modalEdit('Oportunidade')"><i class="fa fa-pen"></i></button>
            <button class="btn btn-md bg-laranja" onclick="modalDel('Oportunidade')"><i class="fa fa-trash"></i></button>
          </div>
        </div>

        <div class="card col-3">
          <div class="card-header bg-laranja">
              AMEAÇAS
          </div>
          <div id="card-body-ameaca" class="card-body">
            <div>
              <p>
              <input type="checkbox" id="" name="">
                isso aqui era pra ser a descriçao de um ponto de AMEAÇAS da empresa
              </p>
            </div>
          </div>
          <div id="containerCRUD" class="footer">
            <button class="btn btn-md bg-laranja" onclick="modal_add('Ameaça')"><i class="fa fa-plus"></i></button>
            <button class="btn btn-md bg-laranja" onclick="modalEdit('Ameaça')"><i class="fa fa-pen"></i></button>
            <button class="btn btn-md bg-laranja" onclick="modalDel('Ameaça')"><i class="fa fa-trash"></i></button>
          </div>
        </div>

      </div>
      <!-- <img src="view/imgs/logomarca.png" alt="" style="display: block;width: 350px; margin: 3.8vw auto; opacity: 1"> -->
  </div>
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

    function functionAcao(campo, obj, indice)
    {
      return `<button class="btn btn-sm btn-warning" onclick="del_tabelaMissaoValores(${obj.id})"><i class="fa fa-trash"></i></button>` + `<button style="margin-left: 10px;" class="btn btn-sm btn-warning" onclick="edit_tabelaMissaoValores(${obj.id})"><i class="fa fa-pen"></i></button>`;
    }

    function reload(){
      
      // Forca
      $.get('http://localhost:3000/api/swots/nome/Força', function(retorno) {
        const swots = retorno.swots; //transformar em json o retorno
        $('#card-body-forca').html('');
        swots.forEach(swot =>
        {
          $('#card-body-forca').append(`<div>
              <p>
              <input type="checkbox" id="" name="">
              ${swot.descricao}
              </p>
            </div>`);
        });
    
      });
      // Fraqueza
      $.get('http://localhost:3000/api/swots/nome/Fraqueza', function(retorno) {
        const swots = retorno.swots; //transformar em json o retorno
        $('#card-body-fraqueza').html('');
        swots.forEach(swot =>
        {
          
          $('#card-body-fraqueza').append(`<div>
              <p>
              <input type="checkbox" id="" name="">
              ${swot.descricao}
              </p>
            </div>`);
        });
    
      });
      // Oportunidade
      $.get('http://localhost:3000/api/swots/nome/Oportunidade', function(retorno) {
        const swots = retorno.swots; //transformar em json o retorno
        $('#card-body-oportunidade').html('');
        swots.forEach(swot =>
        {
          
          $('#card-body-oportunidade').append(`<div>
              <p>
              <input type="checkbox" id="" name="">
              ${swot.descricao}
              </p>
            </div>`);
        });
    
      });
      // Ameacas
      $.get('http://localhost:3000/api/swots/nome/Ameaça', function(retorno) {
        const swots = retorno.swots; //transformar em json o retorno
        $('#card-body-ameaca').html('');
        swots.forEach(swot =>
        {
          
          $('#card-body-ameaca').append(`<div>
              <p>
              <input type="checkbox" id="" name="">
              ${swot.descricao}
              </p>
            </div>`);
        });
    
      });

    }
//iniciar automaticamente a função reload
    $(function() {
      reload();
    });

    // ADD 
    function modal_add(elementoSWOT)
    {
      $("#titleElementoSwot").html(elementoSWOT)
      $.get('http://localhost:3000/api/swots/nome/'+elementoSWOT), (result) =>{
      const swot = json.swots;
      }

      $("#form_nome").val(elementoSWOT);
      $("#modalAdd").modal("show");
    }


    function add_forca()
    {      
      $.ajax({
        url: 'http://localhost:3000/api/swots',
        type: 'POST',
        dataType:'JSON',
        data: { nome: $('#form_nome').val(), descricao: $('#form_descricao').val() },
        success: function(ret)
        {
          reload()
          $("#modalAdd").modal("hide");
        },
        error: function(err)
        {
          bootbox.alert("Erro na comunicação com o servidor.")
        }
      })
    }

    function modalEdit(elementoSWOT){

    }
    function modalDel(elementoSWOT){

    }
    



  </script>

</body>

</html>
