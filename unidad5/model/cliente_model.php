<?php 
class Cliente {
    public $id_cliente;
    public $nombre;
    public $apodo;
    public $cantidad_dinero;
    public $num_pedidos;

    function __construct($id_cliente, $nombre, $apodo, $cantidad_dinero, $num_pedidos) {
        $this->id_cliente = $id_cliente;
        $this->nombre = $nombre;
        $this->apodo = $apodo;
        $this->cantidad_dinero = $cantidad_dinero;
        $this->num_pedidos = $num_pedidos;
    }
    
    function getIdCliente() {
        return $this->id_cliente;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApodo() {
        return $this->apodo;
    }

    function getCantidadDinero() {
        return $this->cantidad_dinero;
    }

    function getNumPedidos() {
        return $this->num_pedidos;
    }

    function setIdCliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApodo($apodo) {
        $this->apodo = $apodo;
    }

    function setCantidadDinero($cantidad_dinero) {
        $this->cantidad_dinero = $cantidad_dinero;
    }

    function setNumPedidos($num_pedidos) {
        $this->num_pedidos = $num_pedidos;
    }
}
?>
