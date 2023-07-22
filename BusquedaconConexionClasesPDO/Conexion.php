<?php
require ("config.php");
class Conexion{
    protected $conexionDB;

    public function __construct(){
        
        try{
            $this->conexionDB=new PDO("mysql:host=localhost; dbname=pruebas","root","francisco");
            $this->conexionDB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->conexionDB->exec("SET CHARACTER SET utf8");
            return $this->conexionDB;
        }catch(Exception $e){
            echo"Error en: ".$e->getLine();
        }
    }
}
?>