<?php
class Conectar{
      //metodo estatico, no se neceista instanciar la class_exists
      public static function conexion(){
            try {
                  $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                  $conexion = new PDO('mysql:host=localhost;dbname=comms', 'root', 'familia100%', $pdo_options);                  
                  $conexion->exec("SET CHARACTER SET UTF8");
            }
            catch (Exception $e) {
                  die("Error");
            }

            return $conexion;

      }
}
?>
