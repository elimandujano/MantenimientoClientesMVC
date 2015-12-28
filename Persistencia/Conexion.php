<?php

class Conexion {
    private $cn = null;
   
    //Método constructor que permite conectarse al servidor y selecciona la BD Ventas2015, al cual queremos conectarnos
    public function __construct() {
        $host="localhost";
        $user = "root";
        $password = "";
        $database = "Ventas2015";
        $this->cn = mysqli_connect($host,$user,$password,$database);
    }
    
    //Creando un arreglo de los clientes
    public function listado() {
        $sql = "SELECT ID_CLIENTE, CONCAT(nombres,' ',paterno,' ',materno) AS CLIENTE, DIRECCION, FONO, DESCRIPCION, EMAIL FROM CLIENTE C JOIN DISTRITO D ON C.ID_DISTRITO = D.ID_DISTRITO";
        $rs = mysqli_query($this->cn, $sql);
        while ($misClientes = mysqli_fetch_array($rs)) {
            $clientes[] = $misClientes;
        }
        return $clientes;
    }
    //Creando un arreglo de los distrutos
    public function listadoDistritos() {
        $sql = "SELECT ID_DISTRITO, DESCRIPCION FROM DISTRITO";
        $rs = mysqli_query($cn, $sql);
        while ($misDistritos = mysqli_fetch_array($rs)) {
            $distrito[] = $misDistritos;
        }
        return $distrito;
    }
    //Método que permite generar código nuevo de cliente
    public function generaCodigo() {
        $sql = "SELECT ID_CLIENTE FROM CLIENTE ORDER BY ID_CLIENTE DESC LIMIT 1;";
        $rs = mysqli_query($this->cn, $sql);
        $fila = mysqli_fetch_array($rs);
        return 'C'.str_pad((substr($fila[0], -4) + 1),4,'0',STR_PAD_LEFT);
    }
    //Método que permite registrar los datos de un nuevo cliente
    public function registra(ModeloCliente $objCli) {
        $sql = "INSERT INTO CLIENTE(id_cliente, nombres, paterno,materno,direccion,fono,id_distrito,email) "
                . "VALUES('{$objCli->getCodigo()}','{$objCli->getNombres()}','{$objCli->getPaterno()}','{$objCli->getMaterno()}','{$objCli->getDireccion()}','{$objCli->getFono()}','{$objCli->getDistrito()}','{$objCli->getCorreo()}')";
        $rs = mysqli_query($this->cn,$sql);
    }
    //Método que permite buscar un determinado cliente por su codigo
    public function buscaCliente(ModeloCliente $objCli) {
        $sql = "SELECT * FROM CLIENTE WHERE ID_CLIENTE ='{$objCli->getCodigo()}'";
        $rs = mysqli_query($this->cn, $sql);
        $cliente = mysqli_fetch_array($rs);
        return $cliente;
    }
    //Método que permite actualizar un registro de cliente
    public function actualiza(ModeloCliente $objCli) {
        $sql = "UPDATE CLIENTE SET NOMBRES = '{$objCli->getNombres()}', PATERNO = '{$objCli->getPaterno()}',MATERNO ='{$objCli->getMaterno()}',DIRECCION ='{$objCli->getDireccion()}',FONO = '{$objCli->getFono()}',ID_DISTRITO = '{$objCli->getDireccion()}',EMAIL = '{$objCli->getCorreo()}' WHERE ID_CLIENTE = '{$objCli->getCodigo()}'";
        $rs = mysqli_query($this->cn, $sql);
    }
    //Método que permite eliminar un determinado cliente basado en su codigo
    public function elimina(ModeloCliente $objCli){
            $sql = "DELETE FROM CLIENTE WHERE ID_CLIENTE = '{$objCli->getCodigo()}'";
            $rs = mysqli_query($this->cn, $sql);
    }

}

