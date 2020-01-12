<?php 
  // session_start();
  // require "../config/General/connexion.php";
  $alert ="";
  if(!empty($_SESSION['active'])){
    if($_SESSION['perfil'] != null){
      $conn= new DataBase();
      $link = $conn->Conectarse();
      $perfil = $_SESSION['perfil'];
      $queryCa= "SELECT * FROM juancarlos.tbp_cabecera WHERE perfil = '$perfil' AND Activo = 'Y' ";
      $resultCa = mysqli_query($link, $queryCa);
      mysqli_close($link);
?>
<div class="pos-f-t">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="">Asistencias a Reuniones</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav">
<?php 
      if($resultCa != null){
        while ($row = mysqli_fetch_assoc($resultCa)):?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?= $row['nombre'];?>  </a>
            <ul class="dropdown-menu">
            <?php
            $cabe = $row['idtbp_cabecera'];
            $conn= new DataBase();
            $links = $conn->Conectarse();
            $query = "SELECT A.cabecera, A.ruta AS ruta_id, B.ruta, B.nombre
                        FROM juancarlos.tba_navegac A
                  INNER JOIN juancarlos.tbp_rutas B ON (A.ruta = B.idtbp_rutas)
                       WHERE cabecera = '$cabe' AND perfil= '$perfil';";
            // echo "<pre>";
            // print_r($query);
            // echo "</pre>";
            // die;
            $result=mysqli_query($links, $query);
            mysqli_close($links);
            if($result != null){
            while ($rowSu = mysqli_fetch_assoc($result)):?>
              <li><a href="../<?= $rowSu['ruta'];?>"><?= $rowSu['nombre'];?></a></li>
            <?php
            endwhile;
            }
            ?>
            </ul>
          </li>
<?php 
        endwhile;
      }else{
        echo "El usuario no se le ha asigando un perfil. Por favor comuniquese con el administrador.";
      }
    }else{
      $alert = 'Su usuario no se le ha asignado un perfil, contacte al administrador.';
    }
  }
?>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['usuario']; ?>  </a>
          <ul class="dropdown-menu">
            <li><a href="../config/General/salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</div>
<?php if($alert != null){ ?>
  <div class="alert alert-warning"><?php echo isset($alert) ? $alert : ''; ?></div>
<?php } ?>