<?php 
class Miembro {
    public $id_miembro;
    public $nombre;
    public $apodo;
    public $antiguedad;
    public $nacionalidad;
    public $id_unidad;
    public $id_organizacion;

    public function __construct($id_miembro, $nombre, $apodo, $antiguedad, $nacionalidad, $id_unidad, $id_organizacion) {
        $this->id_miembro = $id_miembro;
        $this->nombre = $nombre;
        $this->apodo = $apodo;
        $this->antiguedad = $antiguedad;
        $this->nacionalidad = $nacionalidad;
        $this->id_unidad = $id_unidad;
        $this->id_organizacion = $id_organizacion;
    }

    public function getId_miembro() {
        return $this->id_miembro;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApodo() {
        return $this->apodo;
    }

    public function getAntiguedad() {
        return $this->antiguedad;
    }

    public function getNacionalidad() {
        return $this->nacionalidad;
    }

    public function getId_unidad() {
        return $this->id_unidad;
    }

    public function getId_organizacion() {
        return $this->id_organizacion;
    }

    public function setId_miembro($id_miembro) {
        $this->id_miembro = $id_miembro;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApodo($apodo) {
        $this->apodo = $apodo;
    }

    public function setAntiguedad($antiguedad) {
        $this->antiguedad = $antiguedad;
    }

    public function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    public function setId_unidad($id_unidad) {
        $this->id_unidad = $id_unidad;
    }

    public function setId_organizacion($id_organizacion) {
        $this->id_organizacion = $id_organizacion;
    }

}

?>