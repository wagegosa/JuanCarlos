<?php 
// echo "<pre>";
//   print_r($_POST);
//   echo "</pre>";
//   die;
$alert = '';
session_start();
if(!empty($_SESSION['active'])){
  switch ($_SESSION['perfil']) {
    case '1':
    header('location: ./admin/');
    break;

    case '2':
    header('location: ./operario/');
    break;

    case '3':
    header('location: ./operario/');
    break;
  }
}else{
  if(!empty($_POST)){
    if(empty($_POST['username']) || empty($_POST['pass'])){
      $alert = 'Ingrese su usuario y su calve';
    }else{
      require_once "./config/General/connexion.php";
      $conn= new DataBase();
      $link = $conn->Conectarse();
      $user = $_POST['username'];
      // $pass = md5($_POST['pass']);
      $pass = $_POST['pass'];
      $query = "SELECT idtba_Usuario, perfil, usuario, nom_comple FROM Juancarloso.tba_usuario WHERE usuario = '$user' AND pass = '$pass'  AND activo = 'Y'";
      $result = mysqli_query($link,$query);
      mysqli_close($link);
      $resulta = mysqli_num_rows($result);
      if($resulta > 0){
        $data = mysqli_fetch_array($result);
        $_SESSION['active'] = true;
        $_SESSION['idUser'] = $data['idtba_Usuario'];
        $_SESSION['perfil'] = $data['perfil'];
        $_SESSION['usuario']  = $data['usuario'];
        $_SESSION['nombre']   = $data['nom_comple'];
        switch ($_SESSION['perfil']) {
          case '1':
          header('location: ./admin/');
          break;
          
          case '2':
          header('location: ./operario/');
          break;

          case '3':
          header('location: ./operario/');
          break;
        }
      }else{
        $alert = 'El <strong>usuario</strong> o la <strong>clave</strong> son incorrectos';
        session_destroy();
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>CR 14</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

  <link rel="stylesheet" type="text/css" href="css/assets/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/assets/bootstrap/fonts/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="css/assets/bootstrap/fonts/iconic/css/material-design-iconic-font.min.css">

  <link rel="stylesheet" type="text/css" href="css/assets/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="css/assets/css-hamburgers/hamburgers.min.css">

  <link rel="stylesheet" type="text/css" href="css/assets/animsition/css/animsition.min.css">

  <link rel="stylesheet" type="text/css" href="css/assets/select2/select2.min.css">

  <link rel="stylesheet" type="text/css" href="css/assets/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" type="text/css" href="css/assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-85 p-b-20">
        <form method="post" autocomplete="off" id="frm" action="">
          <span class="login100-form-title p-b-70">
            <img src="img/CR.png" alt="CAMBIO RADICAL" width="200" height="100">
          </span>
          <span class="login100-form-avatar">
            <img src="img/juancarlos.jpeg" alt="AVATAR">
          </span>
          <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username">
            <input class="input100" type="text" name="username" id="username">
            <span class="focus-input100" data-placeholder="Username"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
            <input class="input100" type="password" name="pass" id="pass">
            <span class="focus-input100" data-placeholder="Password"></span>
          </div>
          <?php if($alert != "" || $alert != null){ ?>
          <div class="alert alert-warning"><?php echo isset($alert) ? $alert : ''; ?></div>
          <?php } ?>
          <div class="container-login100-form-btn">
            <button class="btn btn-primary">
              Ingresar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id="dropDownSelect1"></div>

  <script src="css/assets/jquery/jquery-3.2.1.min.js" type="81f2daff6bd4dc5237cdbae1-text/javascript"></script>

  <script src="css/assets/animsition/js/animsition.min.js" type="81f2daff6bd4dc5237cdbae1-text/javascript"></script>

  <script src="css/assets/bootstrap/js/popper.js" type="81f2daff6bd4dc5237cdbae1-text/javascript"></script>
  <script src="css/assets/bootstrap/js/bootstrap.min.js" type="81f2daff6bd4dc5237cdbae1-text/javascript"></script>

  <script src="css/assets/select2/select2.min.js" type="81f2daff6bd4dc5237cdbae1-text/javascript"></script>

  <script src="css/assets/daterangepicker/moment.min.js" type="81f2daff6bd4dc5237cdbae1-text/javascript"></script>
  <script src="css/assets/daterangepicker/daterangepicker.js" type="81f2daff6bd4dc5237cdbae1-text/javascript"></script>

  <script src="css/assets/countdowntime/countdowntime.js" type="81f2daff6bd4dc5237cdbae1-text/javascript"></script>

  <script src="css/assets/js/main.js" type="81f2daff6bd4dc5237cdbae1-text/javascript"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="81f2daff6bd4dc5237cdbae1-text/javascript"></script>
  <script type="81f2daff6bd4dc5237cdbae1-text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="81f2daff6bd4dc5237cdbae1-|49" defer=""></script>
  </body>
  </html>