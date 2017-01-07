<?php
session_start();
  if (@!$_SESSION['usuario']) {
    header("Location:index.php");
  }
?> 
<!DOCTYPE html>
<html lang="es">
     <head>
         <title>Lista de alumnos</title>
           <meta charset="UTF-8">
           <link href="css/style.css" rel="stylesheet" type="text/css"/>
      </head>
      <body>
   
            <header class="header">
                 <form method="post" action="ListAlumno.php" class="navbar-form navbar-left" role="search"><!--Busquedad-->
                    <div class="form-group">
                    <input name="buscar" type="text" class="form-control" placeholder="Search">
                    <input class="btn btn-info" role="button" type="submit" value="Search"><!--Busquedad-->
                    </div>
                  </form>
            <nav>
                 <ul class="nav pull-right">
                    Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong><!--Muestra el usuario que inicio secion-->
                    <button><a href="menu.php"  class="btn btn-info" role="button">Regresar al Menu</a></button><!--Regresar al Menu-->
                    <button><a href="registraralumno.php" class="btn btn-info" role="button">Registrar Alumno</a></button><!--Reenvia al formulario del alumno-->
                    <button><a href="desconectar.php" class="btn btn-info" role="button">Salir</a></button><!--Boton Cerrar Cesion-->
                   </ul>
            </nav>
            </header>
<!--//////////////////////////////Inicia cuerpo interno///////////////////////////////-->
            
              <h2>LISTA DE ESTUDIANTES</h2>

              
                <?php
                    
                     require("conexion.php");
                     $sql = isset($_POST['buscar']) ? "SELECT * from estudiante where nombre  LIKE '%".$_POST['buscar']."%' OR matricula LIKE '%".$_POST['buscar']."%' " : ("SELECT * from estudiante");
                     //$sql=("SELECT * FROM student");

                    
                     $query=mysqli_query($conn,$sql);
                        echo "<table class='table table-bordered';>";
                        echo "<tr class='warning'>";
                        //echo "<th>Id</th>";
                        echo "<th>Nombre</th>";
                        echo "<th>Apeidos</th>";
                        //echo "<th>Edad</th>";
                        echo "<th>Sexo</th>";
                        //echo "<th>Fecha de nacimiento</th>";
                        echo "<th>CURP</th>";
                        echo "<th>Matrícula</th>";
                        echo "<th>Telofono</th>";
                        echo "<th>Tutor</th>";
                        echo "<th>Nombre Tutor</th>";
                        //echo "<th>Apeidos Tutor</th>";
                        echo "<th>Domicilio</th>";
                        echo "<th>Localidad</th>";
                        echo "<th>Municipio</th>";
                        //echo "<th>Entidad</th>";
                        echo "<th>Grado</th>";
                        echo "<th>Grupo</th>";
                        //echo "<th>Pago Inscripción</th>";
                        //echo "<th>Pago de pruebas</th>";
                        //echo "<th>Status Alumno</th>";
                        //echo "<th>Apoyo prospera</th>";
                        //echo "<th>Otro</th>";
                        //echo "<th>Alergias</th>";
                        //echo "<th>Tipo de Sangre</th>";
                        //echo "<th>Discapacidad</th>";
                        //echo "<th>Hermanos</th>";
                        //echo "<th>Cuantos</th>";
                        //echo "<th>Necesidades especiales</th>";
                        //echo "<th>Cuales</th>";
                        echo "<th>Editar</th>";
                        echo "<th>Eliminar</th>";
                        echo "<th>Informacion completa del alumno</th>";            
                      echo "</tr>";
                  ?>

                  <?php 
                 
                       while($arreglo=mysqli_fetch_array($query)){
                           echo "<tr>"; echo "<form method='post' action='detallesstudent.php'>";
                            //echo "<td>$arreglo[0]<input type='hidden' name='id' value='$arreglo[0]'></td>";
                            echo "<td>$arreglo[1]<input type='hidden' nombre='id' value='$arreglo[0]'></td>";
                            echo "<td>$arreglo[2]</td>";
                            //echo "<td>$arreglo[3]</td>";
                            echo "<td>$arreglo[4]</td>";
                            //echo "<td>$arreglo[5]</td>";
                            echo "<td>$arreglo[6]</td>";
                            echo "<td>$arreglo[7]</td>";
                            echo "<td>$arreglo[8]</td>";
                            echo "<td>$arreglo[9]</td>";
                            echo "<td>$arreglo[10]</td>";
                            //echo "<td>$arreglo[11]</td>";
                            echo "<td>$arreglo[12]</td>";
                            //echo "<td>$arreglo[13]</td>";
                            echo "<td>$arreglo[14]</td>";
                            echo "<td>$arreglo[15]</td>";
                            echo "<td>$arreglo[16]</td>";
                            echo "<td>$arreglo[17]</td>";
                            //echo "<td>$arreglo[18]</td>";
                            //echo "<td>$arreglo[19]</td>";
                            //echo "<td>$arreglo[20]</td>";
                            //echo "<td>$arreglo[21]</td>";
                            //echo "<td>$arreglo[22]</td>";
                            //echo "<td>$arreglo[23]</td>";
                            //echo "<td>$arreglo[24]</td>";
                            //echo "<td>$arreglo[25]</td>";
                            //echo "<td>$arreglo[26]</td>";
                            //echo "<td>$arreglo[27]</td>";
                            //echo "<td>$arreglo[28]</td>";
                            //echo "<td>$arreglo[29]</td>";
                           


                            echo "<td><a href='actualizaralumno.php?id=$arreglo[0]'>
                            <img id='imgprimaria' src='img/edit.png'></a></td>";



                            echo "<td><a href='eliminaralumno.php?id=$arreglo[0]'>
                            <img id='imgprimaria' src='img/delete.png '></a></td>";

                            

                            //echo "<td><input name='boton1' type='image'src='img/add.png' id='imgprimaria'></td>";

                            echo "<td><a href='infoalumno.php?id=$arreglo[0]'>
                            <img id='imgprimaria' src='img/archivar.png'></a></td>";

                            echo '</form>';

                           echo "</tr>";   
                      }

                      echo "</table>";
                  ?>
<!--/////////////////////////Finaliza cuerpo del documento interno//////////////////////-->
     </body>
</html>
<?php
mysqli_close($conn);
?>