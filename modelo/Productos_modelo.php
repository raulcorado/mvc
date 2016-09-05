<?php
/**
*
*/
class Productos_modelo{

      private $db;

      private $productos;

      public function __construct()
      {
            require_once("modelo/conectar.php");
            $this->db=Conectar::conexion();
            $this->productos=array();

      }

      public function get_productos(){
            ini_set('memory_limit', '1024M');
            $consulta=$this->db->query("select * from scactive limit 80000");
            while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
                  $this->productos[]=$filas;
            }
            return $this->productos;

      }
}

?>
