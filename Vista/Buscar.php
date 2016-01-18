<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SISTEMA DE CONTROL DE VENTAS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <?php
                // ocultamos los errores de advertencia de php.
                error_reporting(0);
                include 'EncabezadoBootstrap.php';
                // agregamos todos los metodos definidos en la clase controlador almacen
                include '../Controlador/ControladorCliente.php';
                
                //Creamos un objeto de la clase conexion;
                $objCon = new Conexion();                      
            ?>
        </header>
        <section>
            <?php 
                //creamos un objeto de la clase ModeloCliente;
                $modCliente = new ModeloCliente();
                
                //Enviamos el codigo del modelo a la clase ya que el metodo de busqueda necesita un objeto y no un valor
                $modCliente->setCodigo($_POST['txtCodigo']);
                $modCliente->setTalla($_POST['txtTalla']);
                
                //Invocamos al metodo buscaCliente enviandole el objeto modCliente el cual contiene solo el codigo del cliente
                $cliente = $objCon->buscaCliente($modCliente);
              ?>
            <h3>BUSQUEDA DE DATOS DE MODELOS</h3>
            <form method="POST">
                <table>
                    <tr>
                        <td>
                            <input type="text" name="txtCodigo" placeholder="Modelo"/>
                            <input type="text" name="txtTalla" placeholder="Talla"/>
                          <input type="submit" name="btnRegistrar" value="Buscar"/>
                        </td>
                    </tr>
                </table>
            </form>
                <br>
                <table
                    <tr>
                    <td>MODELO</td>  
                    <td>COLOR</td>   
                    <td>SUELA</td>   
                    <td>TALLA</td>   
                    <td>TARJETA</td> 
                    <td>PRECIO</td>  
                    <td>UBICACION</td>
                    </tr>
                        <?php 
                            /*Ahora recorremos por los registros para poder colocarlos en una tabla para visualizarlo.*/
                            foreach ($cliente as $cli) {                                        
                        ?>
                    <tr>
                        <td><?php echo $cli[0]; ?></td>
                        <td><?php echo $cli[1]; ?></td>
                        <td><?php echo utf8_decode($cli[2]); ?></td>
                        <td><?php echo $cli[3]; ?></td>
                        <td><?php echo utf8_decode($cli[4]); ?></td>
                        <td><?php echo $cli[5]; ?></td>
                        <td><?php echo $cli[6]; ?></td>
                    </tr>                        
                        <?php } ?>
                    </tr>
                </table>

        </section>
        <footer>
            <?php include 'pie.php';?>
                    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        </footer>
    </body>
</html>
