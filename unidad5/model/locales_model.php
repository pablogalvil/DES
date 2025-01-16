<?php 
class Local{
    public $id_locales;
    public $tipo;
    public $nombre;
    public $antiguedad;
    public $ubicacion;
    public $id_organizacion;

    function __construct($id_locales, $tipo, $nombre, $antiguedad, $ubicacion, $id_organizacion){
        $this->id_locales = $id_locales;
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->antiguedad = $antiguedad;
        $this->ubicacion = $ubicacion;
        $this->id_organizacion = $id_organizacion;
    }

    function getId_locales(){
        return $this->id_locales;
    }

    function getTipo(){
        return $this->tipo;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getAntiguedad(){
        return $this->antiguedad;
    }

    function getUbicacion(){
        return $this->ubicacion;
    }

    function getId_organizacion(){
        return $this->id_organizacion;
    }

    function setId_locales($id_locales){
        $this->id_locales = $id_locales;
    }

    function setTipo($tipo){
        $this->tipo = $tipo;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setAntiguedad($antiguedad){
        $this->antiguedad = $antiguedad;
    }

    function setUbicacion($ubicacion){
        $this->ubicacion = $ubicacion;
    }

    function setId_organizacion($id_organizacion){
        $this->id_organizacion = $id_organizacion;
    }
}

?>