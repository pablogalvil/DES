<?php 
class Organizacion {
    public $id_organizacion;
    public $nombre;
    public $num_unidades;
    public $localizacion;
    public $num_rivales;
    
    function __construct($id_organizacion, $nombre, $num_unidades, $localizacion, $num_rivales) {
        $this->id_organizacion = $id_organizacion;
        $this->nombre = $nombre;
        $this->num_unidades = $num_unidades;
        $this->localizacion = $localizacion;
        $this->num_rivales = $num_rivales;
    }
    
    public function getId_organizacion() {
        return $this->id_organizacion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getNum_unidades() {
        return $this->num_unidades;
    }

    public function getLocalizacion() {
        return $this->localizacion;
    }

    public function getNum_rivales() {
        return $this->num_rivales;
    }

    public function setId_organizacion($id_organizacion) {
        $this->id_organizacion = $id_organizacion;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setNum_unidades($num_unidades) {
        $this->num_unidades = $num_unidades;
    }

    public function setLocalizacion($localizacion) {
        $this->localizacion = $localizacion;
    }

    public function setNum_rivales($num_rivales) {
        $this->num_rivales = $num_rivales;
    }
}

?>