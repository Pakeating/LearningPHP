<?php
    require "Conexion.php";
    class DevuelveProductos extends Conexion{
        public function __construct(){
            parent::__construct();
        }
        public function get_productos($dato){
           $sql="SELECT *FROM ARTÍCULOS WHERE PAISORIGEN='".$dato."'";
           $sentencia=$this->conexionDB->prepare($sql);
           $sentencia->execute(array());
           $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
           $sentencia->closeCursor();

            return $resultado;
            $this->conexionDB=null;
        }
    }

?>