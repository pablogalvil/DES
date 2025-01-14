<?php
class Arma{
    public $id_arma;
    public $tipo;
    public $capacidad;
    public $peso;
    public $tamanio;
    public $accesorios;
    public $id_miembro;

    public function __construct($id_arma, $tipo, $capacidad, $peso, $tamanio, $accesorios, $id_miembro) {
        $this->id_arma = $id_arma;
        $this->tipo = $tipo;
        $this->capacidad = $capacidad;
        $this->peso = $peso;
        $this->tamanio = $tamanio;
        $this->accesorios = $accesorios;
        $this->id_miembro = $id_miembro;
    }

    public function getIdArma() {
        return $this->id_arma;
    }

    public function setIdArma($id_arma) {
        $this->id_arma = $id_arma;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getCapacidad() {
        return $this->capacidad;
    }

    public function setCapacidad($capacidad) {
        $this->capacidad = $capacidad;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getTamanio() {
        return $this->tamanio;
    }

    public function setTamanio($tamanio) {
        $this->tamanio = $tamanio;
    }

    public function getAccesorios() {
        return $this->accesorios;
    }

    public function setAccesorios($accesorios) {
        $this->accesorios = $accesorios;
    }

    public function getIdMiembro() {
        return $this->id_miembro;
    }

    public function setIdMiembro($id_miembro) {
        $this->id_miembro = $id_miembro;
    }
}
