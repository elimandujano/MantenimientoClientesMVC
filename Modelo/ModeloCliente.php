<?php

class ModeloCliente {
    //Declaracion de los atributos rpivados de la clase
    private $codigo;
    private $nombres;
    private $paterno;
    private $materno;
    private $direccion;
    private $fono;
    private $distrito;
    private $correo;
    
    //encapsulacion de los atributos, creacion metodo Get Set
    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getPaterno() {
        return $this->paterno;
    }

    public function getMaterno() {
        return $this->materno;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getFono() {
        return $this->fono;
    }

    public function getDistrito() {
        return $this->distrito;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function setPaterno($paterno) {
        $this->paterno = $paterno;
    }

    public function setMaterno($materno) {
        $this->materno = $materno;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setFono($fono) {
        $this->fono = $fono;
    }

    public function setDistrito($distrito) {
        $this->distrito = $distrito;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    // Implementacion del metodo constructor
    public function __construct($codigo, $nombres, $paterno, $materno, $direccion, $fono, $distrito, $correo) {
        $this->codigo       = $codigo;
        $this->nombres      = $nombres;
        $this->paterno      = $paterno;
        $this->materno      = $materno;
        $this->direccion    = $direccion;
        $this->fono         = $fono;
        $this->distrito     = $distrito;
        $this->correo       = $correo;
    }


    
   
}
