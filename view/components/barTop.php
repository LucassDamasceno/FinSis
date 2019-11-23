<style>
    .dropdown-item.active, .dropdown-item:active
    {
      background: var(--verde);
    }
    .modal-content
    {
      border: none !important;
    }
    .modal-header
    {
      background: var(--verde);
      color: #FFF;
    }
    .btn-success
    {
      background: var(--verde);
      color: #FFF !important;
    }
</style>

<nav class="navbar navbar-expand navbar-dark bg-laranja static-top">
  <div class="col-2">
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0"  id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i></button>
    
    <!-- <img src="view/imgs/logomarca.png" alt="" width="28px"> -->
    <a class="navbar-brand mr-1" href="dashboard.php">Pandora</a>
  </div>

  <div id="dataTop" class="col-8">
  </div>

    <!-- div apenas para um SPAN -->
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></div>
    <!-- FIM DE div apenas para um SPAN -->
    <!-- Navbar -->
    <span id="nomeUsuario">Nome Usuário</span>
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
        </div>
      </li>
    </ul>

</nav>

<!-- Modal de logoff -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Você está prestes a sair. Caso deseje sair clique no botão SAIR.</div>
      <div class="modal-footer">
        <button class="btn btn-success" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-secondary" href="index.php">Sair</a>
      </div>
    </div>
  </div>
</div>