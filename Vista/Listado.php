<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SISTEMA DE CONTROL DE VENTAS</title>
        <link href="../miEstilo.css" rel ="stylesheet">
    </head>
    <body>
        <header>
            <?php
                include 'Encabezado.php';
            ?>            
        </header>
        <section>
            <h3>LISTADO DE CLIENTES</h3>
            <?php 
                //Agregamos los Métodos implementados en la clase conexion.php
                include '../Persistencia/Conexion.php';
                
                //Creamos un objeto de la clase conexion para poder acceder a los métodos.
                $objCon = new Conexion();
                
                /* Invocamos al metodo que lista los clientes mediante el objeto asociado a la clase conexion.*/
                $cliente = $objCon->listado();                
            ?>
            <table border ="1" width="970" cellspacing="1" cellpadding="1">
                <tr class="th">
                    <td>CODIGO</td>
                    <td>CLIENTE</td>
                    <td>DIRECCION</td>
                    <td>TELEFONO</td>
                    <td>DISTRITO</td>
                    <td>EMAIL</td>
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
                </tr>
                <?php } ?>
            </table>
        </section>
        <footer>
            <?php 
                include 'pie.php';
            ?>
        </footer>        
    </body>
</html>
