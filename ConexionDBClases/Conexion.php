<?php
require ("config.php");
class Conexion{
    protected $conexionDB;

    public function __construct(){
        $this->conexionDB=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
        if($this->conexionDB->connect_errno){
            echo"Error en la conexion con la base de datos". $this->conexionDB->connect_error;
            return;
        }
        $this->conexionDB->set_charset(DB_CHARSET);

    }
}
?>