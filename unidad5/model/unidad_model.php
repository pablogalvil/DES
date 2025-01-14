<?php 
class Unidad {
    public $id_unidad;
    public $num_subordinados;
    public $vehiculos;
    public $armas;
    public $dinero;
    public $id_organizacion;
    public $id_jefe;
    
    public function __construct($id_unidad, $num_subordinados, $vehiculos, $armas, $dinero, $id_organizacion, $id_jefe) {
        $this->id_unidad = $id_unidad;
        $this->num_subordinados = $num_subordinados;
        $this->vehiculos = $vehiculos;
        $this->armas = $armas;
        $this->dinero = $dinero;
        $this->id_organizacion = $id_organizacion;
        $this->id_jefe = $id_jefe;
    }

    public function getId_unidad() {
        return $this->id_unidad;
    }

    public function setId_unidad($id_unidad) {
        $this->id_unidad = $id_unidad;
    }

    public function getNum_subordinados() {
        return $this->num_subordinados;
    }

    public function setNum_subordinados($num_subordinados) {
        $this->num_subordinados = $num_subordinados;
    }

    public function getVehiculos() {
        return $this->vehiculos;
    }

    public function setVehiculos($vehiculos) {
        $this->vehiculos = $vehiculos;
    }

    public function getArmas() {
        return $this->armas;
    }

    public function setArmas($armas) {
        $this->armas = $armas;
    }

    public function getDinero() {
        return $this->dinero;
    }

    public function setDinero($dinero) {
        $this->dinero = $dinero;
    }

    public function getId_organizacion() {
        return $this->id_organizacion;
    }

    public function setId_organizacion($id_organizacion) {
        $this->id_organizacion = $id_organizacion;
    }

    public function getId_jefe() {
        return $this->id_jefe;
    }

    public function setId_jefe($id_jefe) {
        $this->id_jefe = $id_jefe;
    }

}

?>