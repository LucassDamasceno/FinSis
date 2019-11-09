<?php 
  header("location: dashboard.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="view/imgs/faviconLG.png" sizes="16x16" type="image/png" />
  <title>Construtora Pandora</title>

  <!-- Custom fonts for this template-->
  <link href="view/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="view/css/sb-admin.css" rel="stylesheet">
  <link href="view/css/login.css" rel="stylesheet">

</head>

<body class="bg-info">

  <div class="container">
    <div id="loginContainerLogo">
      <img id="loginLogo" src="view/imgs/logomarca.png" alt="">
    </div>
    <div id="loginContainerForm" class="card card-login mx-auto mt-5">
      <div class="card-header">Entrar</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Login" required="required" autofocus="autofocus">
              <label for="inputEmail">Login</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="required">
              <label for="inputPassword">Senha</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Lembrar Senha
              </label>
            </div>
          </div>
          <a id="btnLogar" class="btn btn-block" href="index.html">Entrar</a>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="view/vendor/jquery/jquery.min.js"></script>
  <script src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="view/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
