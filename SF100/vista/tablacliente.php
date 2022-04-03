<?php 

include 'php/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Team PWR GYM</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/ico.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <link rel="stylesheet" href="css/perfil.css"/>
        <link rel="stylesheet" href="css/tabla_cliente.css"/>
        <script src="https://kit.fontawesome.com/c0fabdf7df.js" crossorigin="anonymous"></script>
    </head>

    <body>       

        <header class="perfil-h">

            <img src="img/logo.svg"/><br>
            <!-- <h1>Team power GYM</h1> -->
            <div class="usuario">
                <p>Ismael Fernández Terrones
                    <img id="foto" src="img/gerente.png" alt="">
                </p>
            </div>
            
        </header>
                    
        <nav class="menu">
            <a id="her" href="tablacliente.php">
                <i class="fa-solid fa-child"></i> Clientes
            </a>
            <a href="tablaentrenador.html">
                <i class="fa-solid fa-dumbbell"></i> Entrenadores
            </a>
            <a href="tablarecepcionista.html">
                <i class="fa-solid fa-person-dots-from-line"></i> Recepcionistas
            </a>
            <a href="tablaproducto.html">
                <i class="fa-solid fa-cart-shopping"></i> Productos
            </a>
            <a href="tablaservicio.html">
                <i class="fa-solid fa-hand-holding-dollar"></i> Servicios
            </a>
            <a id="inicio" href="index.html">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar Sesion
            </a>
        </nav>

        <div class="title">
            <h1>Clientes</h1>
        </div>

        <div class="tablaCliente">
            <a href="formcliente.html">
                <img id="add" src="img/add.jpg" title="Agregar">
            </a>

            <!--Tabla de cliente-->
            <table>
                <tr>
                    <th>Id_cliente</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Nombre(s)</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Municipio</th>
                    <th>Código postal</th>
                    <th>Fecha de inscripción</th>
                    <th colspan="2">Operaciones</th>                  
                </tr>

                <?php
                $sql = "SELECT * FROM cliente";
                $result = mysqli_query($conexion, $sql);

                while($mostrar = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['id_cliente'] ?></td>
                        <td><?php echo $mostrar['apellido_paterno_cliente'] ?></td>
                        <td><?php echo $mostrar['apellido_meterno_cliente'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['email'] ?></td>
                        <td><?php echo $mostrar['telefono'] ?></td>
                        <td><?php echo $mostrar['calle'] ?></td>
                        <td><?php echo $mostrar['colonia'] ?></td>
                        <td><?php echo $mostrar['municipio'] ?></td>
                        <td><?php echo $mostrar['codigo_postal'] ?></td>
                        <td><?php echo $mostrar['fecha_inscripcion'] ?></td>
                        <td>
                            <a href="#" title="Modificar">
                                <i class="fa-solid fa-pen-to-square"></i>                            
                            </a>  
                        </td>      
                        <td>
                            <a href="formclientebajas.php" name="eliminar" title="Borrar">
                                <i class="fa-solid fa-trash-can"></i>                            
                            </a>  
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
        </div>

        <!--Pie de página-->
        <footer>                   
            <p id="f1"> 
                Team Power <br>
                Parque Municipal, pueblo nuevo chalco, edo mex <br>
                tel: 57891532 y 12457898
            </p>
            <p id="f2" >
                <br> AAUES Progress &copy; 2022
            </p>        
        </footer>      
        
    </body>

</html>