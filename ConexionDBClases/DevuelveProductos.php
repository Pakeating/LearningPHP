<?php
    require "Conexion.php";
    class DevuelveProductos extends COnexion{
        public function __construct(){
            parent::__construct();
        }
        public function get_productos(){
            $resultado=$this->conexionDB->query("SELECT * FROM ARTÍCULOS");
            $productos=$resultado->fetch_all(MYSQLI_ASSOC);
            return $productos;
        }
    }

?>