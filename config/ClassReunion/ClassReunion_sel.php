 <?php
date_default_timezone_set('America/Bogota');

class Reunion extends DataBase
{
	public $idtba_reunion;
  public $nombre;
	public $activo;

  public function listarReunion(){
    try
    {
      parent::Conexion();
      $sql = "SELECT A.idtba_reunion, 
                     A.fec_reunio_inicio, 
                     A.hor_inicio, 
                     A.hor_finxxx, 
                     A.direccion, 
                     A.organizador,
                     A.telefono, 
                     A.barrio, 
                     A.activo 
                FROM Juancarloso.tba_reunion A";
      $qry = $this->dbCon->prepare($sql);
      $qry->execute();
      $row = $qry->fetchAll(PDO::FETCH_OBJ);
      $qry->closeCursor();
      return $row;
      $this->dbCon = null;
    }
    catch ( PDOException $e )
    {
      die("Ha ocurrido un error inesperado en la base de datos.<br>".$e->getMessage());
    }
  }
  public function listarReunionActi(){
    $hoy = date('Y-m-d');
    try
    {
      parent::Conexion();
      $sql = "SELECT * FROM Juancarloso.tba_reunion where activo = 'Y' AND fec_reunio_inicio = '$hoy'";
      $qry = $this->dbCon->prepare($sql);
      $qry->execute();
      $row = $qry->fetchAll(PDO::FETCH_OBJ);
      $qry->closeCursor();
      return $row;
      $this->dbCon = null;
    }
    catch ( PDOException $e )
    {
      die("Ha ocurrido un error inesperado en la base de datos.<br>".$e->getMessage());
    }
  }
  public function listarReunionhora()
  {
    try
    {
      parent::Conexion();
      $sql = "SELECT idtba_reunion, organizador
                FROM Juancarloso.tba_reunion 
               WHERE activo = 'Y'
                 AND CONVERT (fec_reunio_inicio, DATE) = CONVERT (NOW(), DATE) 
                 AND DATE_FORMAT(NOW( ), '%H:%i' ) >= DATE_FORMAT(hor_inicio, '%H:%i') 
                 AND DATE_FORMAT(NOW( ), '%H:%i' ) <= DATE_FORMAT(hor_finxxx, '%H:%i')";
      $qry = $this->dbCon->prepare($sql);
      $qry->execute();
      $row = $qry->fetchAll(PDO::FETCH_OBJ);
      $qry->closeCursor();
      return $row;
      $this->dbCon = null;
    }
    catch ( PDOException $e )
    {
      die("Ha ocurrido un error inesperado en la base de datos.<br>".$e->getMessage());
    }
  }
}

?>
