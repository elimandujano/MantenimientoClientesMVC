<?php

class ControladorCliente {
    //Incluimos los métodos publicos dentro del archivo ControladorCliente.php
    include 'hola';
    include '../Modelo/ModeloCliente.php';
    include '../Persistencia/Conexion.php';
    // Creamos un objeto conexion para poder acceder a los metodos de este
    $conexion = new Conexion();
    
    /*Validamos la seleccion del boton Registrar para poder capturar todos
      los valores ingresados para el nuevo cliente*/
    if(isset($_POST['btnRegistrar'])){
            $codigo     =$_POST['txtCodigo'];
            $nombres    =$_POST['txtNombres'];
            $paterno    =$_POST['txtPaterno'];
            $materno    =$_POST['txtMaterno'];
            $direccion  =$_POST['txtDireccion'];
            $fono       =$_POST['txtTelefono'];
            $distrito   =$_POST['selDistrito'];
            $correo     =$_POST['txtEmail'];
    }
    
    //Creamos un Objeto de la clase ModeloClientes (modCliente) enviando los valores capurados al constructor de la clase
    $modCliente = new ModeloCliente($codigo, $nombres, $paterno, $materno, $direccion, $fono, $distrito, $correo);
    
    //Ejecutamos el registro mediante la invocacion del método registra que se encuentra en la clase conexion.
    $conexion->registra($modCliente);
    header('location:../Vista/listado.php');
}
?>
