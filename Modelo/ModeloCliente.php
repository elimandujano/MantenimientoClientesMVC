<?php

class ModeloCliente {
    //Declaracion de los atributos rpivados de la clase
    private $codigo;
    private $color;
    private $suela;
    private $talla;
    private $destino;
    private $precio;
    private $distrito;
    private $tarjeta;
    
    //encapsulacion de los atributos, creacion metodo Get Set
    public function getCodigo() {
        return $this->codigo;
    }

    public function getColor() {
        return $this->color;
    }

    public function getSuela() {
        return $this->suela;
    }

    public function getTalla() {
        return $this->talla;
    }

    public function getDestino() {
        return $this->destino;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getDistrito() {
        return $this->distrito;
    }

    public function getTarjeta() {
        return $this->tarjeta;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setSuela($suela) {
        $this->suela = $suela;
    }

    public function setTalla($talla) {
        $this->talla = $talla;
    }

    public function setDestino($destino) {
        $this->destino = $destino;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setDistrito($distrito) {
        $this->distrito = $distrito;
    }

    public function setTarjeta($tarjeta) {
        $this->tarjeta = $tarjeta;
    }

    public function __construct($codigo, $color, $suela, $talla, $destino, $precio, $distrito, $tarjeta) {
        $this->codigo = $codigo;
        $this->color = $color;
        $this->suela = $suela;
        $this->talla = $talla;
        $this->destino = $destino;
        $this->precio = $precio;
        $this->distrito = $distrito;
        $this->tarjeta = $tarjeta;
    }

   
}
