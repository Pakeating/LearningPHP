<?php
class Compra_vehiculo{
    private $precio_base;
    private static $subvencion=0;

    function __construct($gama){
        if($gama=="urbano"){
            $this->precio_base=10000;
        }else if($gama=="compacto"){
            $this->precio_base=20000;
        }else if($gama=="berlinga"){
            $this->precio_base=30000;
        }
    }
    static function subvencionar(){
        if(date("m-d-y")>"05-01-15"){
        self::$subvencion=4500;}
    }


    function climatizador(){
        $this->precio_base+=2000;
    }
    function navegador(){
        $this->precio_base+=2500;
    }
    function tapiceria($color){
        if($color=="blanco"){
            $this->precio_base+=3000;
        } else if($color=="beige"){
            $this->precio_base+=3500;
        } else{
            $this->precio_base+=5000;
        }
    }
    function precio_final(){
        $valorFinal=$this->precio_base-self::$subvencion;
        return $valorFinal;
    }
}
?>