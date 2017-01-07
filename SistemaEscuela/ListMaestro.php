<?php
session_start();
  if (@!$_SESSION['usuario']) {
    header("Location:index.php");
  }
?> 
<!DOCTYPE html>
<html lang="es">
     <head>
         <title>Lista de Maestros</title>
           <meta charset="UTF-8">
           <link href="css/style.css"  rel="stylesheet" type="text/css"/>
      </head>
      <body>
   
            <header class="header">
                 <form method="post" action="ListMaestro.php" class="navbar-form navbar-left" role="search"><!--Busquedad-->
                    <div class="form-group">
                    <input name="buscar" type="text" class="form-control" placeholder="Search">
                    <input class="btn btn-info" role="button" type="submit" value="Search"><!--Busquedad-->
                    </div>
                  </form>
            <nav>
                 <ul class="nav pull-right">
                    Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong><!--Muestra el usuario que inicio secion-->
                    <button><a href="menu.php"  class="btn btn-info" role="button">Regresar al Menu</a></button><!--Regresar al Menu-->
                    <button><a href="registromaestro.php" class="btn btn-info" role="button">Registrar Maestro</a></button><!--Reenvia al formulario del alumno-->
                    <button><a href="desconectar.php" class="btn btn-info" role="button">Salir</a></button><!--Boton Cerrar Cesion-->
                   </ul>
            </nav>
            </header>
<!--//////////////////////////////Inicia cuerpo interno///////////////////////////////-->
            
              <h2>LISTA DE MAESTROS</h2>

              
                <?php
                    require("conexion.php");
                     
                     $sql = isset($_POST['buscar']) ? "SELECT * from maestro where nombre  LIKE '%".$_POST['buscar']."%' OR localidad LIKE '%".$_POST['buscar']."%' " : ("SELECT * from maestro");
                     //$sql=("SELECT * FROM maestro");

                    
                     $query=mysqli_query($conn,$sql);
                        echo "<table class='table table-bordered';>";
                        echo "<tr class='warning'>";
                        //echo "<th>Id</th>";
                         echo "<th>Nombre</th>";
                        echo "<th>Apeidos</th>";
                        echo "<th>Domicilio</th>";
                        echo "<th>Numero</th>";
                        echo "<th>Localidad</th>";
                        echo "<th>Municipio</th>";
                        echo "<th>Grado que atiende</th>";
                        echo "<th>Telofono</th>";
                        echo "<th>Sexo</th>";
                        //echo "<th>Fecha de nacimiento</th>";
                        echo "<th>CURP</th>";
                        echo "<th>RFC</th>";
                        echo "<th>Correo Electronico</th>";
                        //echo "<th>Fecha de ingreso al servicio</th>";
                        //echo "<th>Status</th>";
                        //echo "<th>Clave de cobro</th>";
                        //echo "<th>Clave de nombramiento</th>";
                        //echo "<th>Numero de afiliacion al IMS</th>";
                        //echo "<th>Grado maximo de estudios</th>";
                        //echo "<th>Carrera Magisterial</th>";
                        //echo "<th>Cual</th>";
                        //echo "<th>K</th>";
                        //echo "<th>Cual</th>";
                        echo "<th>Editar</th>";
                        echo "<th>Eliminar</th>"; 
                        echo "<th>Informacion completa del maestro</th>";              
                      echo "</tr>";
                  ?>

                  <?php 
                 
                       while($arreglo=mysqli_fetch_array($query)){
                           echo "<tr>"; echo "<form method='post' action='detallesstudent.php'>";
                            //echo "<td>$arreglo[0]<input type='hidden' name='id' value='$arreglo[0]'></td>";
                            echo "<td>$arreglo[1]<input type='hidden' nombre='id' value='$arreglo[0]'></td>";
                            echo "<td>$arreglo[2]</td>";
                            echo "<td>$arreglo[3]</td>";
                            echo "<td>$arreglo[4]</td>";
                            echo "<td>$arreglo[5]</td>";
                            echo "<td>$arreglo[6]</td>";
                            echo "<td>$arreglo[7]</td>";
                            echo "<td>$arreglo[8]</td>";
                            echo "<td>$arreglo[9]</td>";
                            //echo "<td>$arreglo[10]</td>";
                            echo "<td>$arreglo[11]</td>";
                            echo "<td>$arreglo[12]</td>";
                            echo "<td>$arreglo[13]</td>";
                            //echo "<td>$arreglo[14]</td>";
                            //echo "<td>$arreglo[15]</td>";
                            //echo "<td>$arreglo[16]</td>";
                            //echo "<td>$arreglo[17]</td>";
                            //echo "<td>$arreglo[18]</td>";
                            //echo "<td>$arreglo[19]</td>";
                            //echo "<td>$arreglo[20]</td>";
                            //echo "<td>$arreglo[21]</td>";
                            //echo "<td>$arreglo[22]</td>";
                            //echo "<td>$arreglo[23]</td>";
                           


                         
                           


                            echo "<td><a href='actualizarmaestro.php?id=$arreglo[0]'>
                            <img id='imgprimaria' src='img/edit.png'></a></td>";



                            echo "<td><a href='eliminarmaestro.php?id=$arreglo[0]'>
                            <img id='imgprimaria' src='img/delete.png '></a></td>";

                            

                            //echo "<td><input name='boton1' type='image'src='img/add.png' id='imgprimaria'></td>";

                            echo "<td><a href='infomaestro.php?id=$arreglo[0]'>
                            <img id='imgprimaria' src='img/archivar.png'></a></td>";

                            echo '</form>';

                           echo "</tr>";   
                      }

                      echo "</table>";
                  ?>
<!--//////////////Finaliza cuerpo del documento interno//////////////////////-->
     </body>
</html>
<?php
mysqli_close($conn);
?>