<?php
   //Incluimos los métodos publicos dentro del archivo ControladorCliente.php
    include '../Modelo/ModeloCliente.php';
    include '../Persistencia/Conexion.php';
    
    // Creamos un objeto conexion para poder acceder a los metodos de este
    $conexion = new Conexion();
    
    /*Validamos la seleccion del boton Registrar para poder capturar todos
      los valores ingresados para el nuevo cliente*/
    if(isset($_POST['btnRegistrar'])){
            $codigo     =$_POST['txtCodigo'];
            $color      =$_POST['txtColor'];
            $suela      =$_POST['txtSuela'];
            $talla      =$_POST['txtTalla'];
            $destino    =$_POST['txtDestino'];
            $precio     =$_POST['txtPrecio'];
            $distrito   =$_POST['selDistrito'];
            $tarjeta    =$_POST['txtTarjeta'];
    }
    
    //Creamos un Objeto de la clase ModeloClientes (modCliente) enviando los valores capurados al constructor de la clase
    $modCliente = new ModeloCliente($codigo, $color, $suela, $talla, $destino, $precio, $distrito, $tarjeta);
    
    //Ejecutamos el registro mediante la invocacion del método registra que se encuentra en la clase conexion.
    $conexion->registra($modCliente);
    
    header('location:../Vista/CarminEscolar.php');

