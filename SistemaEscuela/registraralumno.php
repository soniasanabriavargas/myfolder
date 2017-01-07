<?php
session_start();
  if (@!$_SESSION['usuario']) {
    header("Location:index.php");
  }
?> 

<!DOCTYPE html>
<html lang="es">
    <head>
   	    <title>Registrar Alumno</title>
   	    <meta charset="UTF-8">
        <link href="css/style.css"  rel="stylesheet" type="text/css"/> 
    </head>
    <body>
      <header class="header">
               <ul class="nav pull-right">
                Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong><!--Muestra el usuario que ingreso a la cuenta-->
              </ul>

      </header>

         <h2>REGISTRO DEL ALUMNO</h2>
              <table>
           	    <form action="procesaralumno.php" method="post">
                   <tr>
                    <td><label for="name">Nombre:</label></td>              
                    <td><input type="text" name="nombre" required placeholder="Nombre">
                    </td>
                    </tr>

                    <tr>
                    <td><label for="apeidos">Apeidos:</label></td>              
                    <td><input type="text" name="apeidos" required placeholder="Apeidos">
                    </td>
                    </tr>

             	    <tr>
             	     <td><label for="edad">Edad:</label></td>
             	     <td><input type="text" name="edad" required placeholder="Edad"></td>
             	    </tr>

                    <tr>
                    <td><label for="sexo">Sexo:</label></td>
                    <td>
                    <input type="radio" name="sexo" value="Mujer">Mujer
                    <input type="radio" name="sexo" value="Hombre" checked> Hombre
                    </td>
                    </tr>
          
                      
                    <tr>
                    <td><label for="fecha de nacimiento">Fecha de nacimiento:</label></td>
                    <td><input type="date" name="fechanac" requiered placeholder="Fecha de nacimiento"></td>
                    </tr>


                    <tr>
                    <td><label for="CURP">CURP:</label></td>
                    <td><input type="text" name="CURP" requiered placeholder="CURP"></td>
                    </tr>
                    
                    <tr>
                    <td><label for="matricula">Matrícula:</label></td>
                    <td><input type="text" name="matricula" requiered placeholder="Matricula"></td>
                    </tr>

                    <tr>
                    <td><label for="telefono">Telofono:</label></td>
                    <td><input type="text" name="telefono" requiered placeholder="Telefono"></td>
                    </tr>
                     
                    <tr>
                    <td>
                     <label for="tutor">Tutor:</label>
                    </td>
                    <td>
                     <select name="tutor">
                        <option value="Mamá">Mamá</option>
                        <option value="Papá">Papá</option>
                        <option value="Otro">tutor</option>
                     </select>
                     </td>
                    </tr>

                    <tr>
                    <td>
                     <label for="nombreT">Nombre Tutor:</label>
                    </td>
                    <td>
                     <input type="text" name="NombreT" required placeholder="Nombre Tutor">
                     </td>
                    </tr>

                    <tr>
                    <td>
                     <label for="apeidost">Apeidos Tutor:</label>
                    </td>
                    <td>
                     <input type="text" name="apeidost" required placeholder="Apeidos Tutor">
                     </td>
                    </tr>
                     
                     <tr>
                     <td><label for="domicilio">Domicilio:</label></td>
                     <td><input type="text" name="domicilio" requiered placeholder="Domicilio"></td>
                     </tr>

                     <tr>
                     <td><label for="Localidad">Localidad:</label></td>
                     <td>
                     <input type="text" name="Localidad" requiered placeholder="Localidad">
                     </td>
                     </tr>

                     <tr>
                     <td><label for="Municipio">Municipio:</label></td>
                     <td>
                     <input type="text" name="municipio" requiered placeholder="Municipio">
                     </td>
                     </tr>

                     <tr>
                     <td><label for="entidad">Entidad:</label></td>
                     <td>
                     <input type="text" name="entfed" requiered placeholder="Entidad">
                     </td>
                     </tr>
                                 
                     <tr>
                     <td>
                     <label for="grado">Grado:</label>
                     </td>
                     <td>
                     <select name="grado">
                     	  <option value="1">1</option>
                     	  <option value="2">2</option>
                     	  <option value="3">3</option>
                     	  <option value="4">4</option>
                     	  <option value="5">5</option>
                     	  <option value="6">6</option>
                     </select>
                     </td>
                     </tr>
                    
                     <tr>
                     <td>
                     <label for="grupo">Grupo:</label>
                     </td>
                     <td>
                     <select name="grupo">
                     	  <option value="A">A</option>
                     	  <option value="B">B</option>
                     	  <option value="C">C</option>
                     </select>
                     </td>
                     </tr>
                     
                     <!--<tr>
                     <td>
                     <label for="calificación">Calificación:</label>
                     </td>
                     <td>
                     <input type="text" name="calificacion" requiered placeholder="Calificacion">
                     </td>
                     </tr>-->

                     <tr>
                     <td><label for="pagoI">Pago Inscripción:</label></td>
                     <td><input type="text" name="pagoinscri" requiered placeholder="Pago de Incripcion"></td>
                     </tr>
                     
                     <tr>
                     <td>
                     <label for="pagoP">Pago de pruebas:</label>
                     </td>
                     <td>
                     <input type="text" name="pagoprueb" requiered placeholder="Pago de pruebas">
                     </td>
                     </tr>

                     <tr>
                     <td><label for="status">Status Alumno:</label></td>
                     <td>
                     <select name="status">
                     	  <option value="regular">Regular</option>
                          <option value="repetidor">Repetidor</option>
                          <option value="riesgo">Riesgo</option>
                     	  <option value="resago">Resago</option>
                          <option value="sobresaliente">Sobresaliente</option>
                          <option value="necesidades_especiales">Necesidades Especiales</option>
                     </select>
                     </td>
                     </tr>

                     <tr>
                     <td><label for="apoyo">Apoyo prospera u otro:</label></td>
                     <td><select name="apoyo">
                     	  <option value="si">Si</option>
                     	  <option value="no">No</option>
                     </select></td>
                     </tr>

                     <tr>
                         <td><label for="cual">Cual</label></td>
                         <td><input type="text" name="apoyo2" required placeholder="Cual"></td>
                     </tr>


                     <tr>
                     <td><label for="alergias">Alergias:</label></td>
                     <td><input type="text" name="alergias" requiered placeholder="Alergias"></td>
                     </tr>

                     <tr>
                     <td><label for="tipoS">Tipo de Sangre:</label></td>
                     <td>
                     <select name="tiposangre">
                     	  <option value="A+">A Positivo</option>
                     	  <option value="A-">A Negativo</option>
                     	  <option value="B+">B Positivo</option>
                     	  <option value="B-">B Negativo</option>
                     	  <option value="O+">O Positivo</option>
                     	  <option value="O-">O Negativo</option>
                     	  <option value="AB+">AB Positivo</option>
                     	  <option value="AB-">AB Negativo</option>           	 
                     </select>
                     </td>
                     </tr>
                     

                     <tr>
                     <td><label for="discapacidad">Discapacidad:</label></td>
                     <td><input type="text" name="discapacidad" requiered placeholder="Discapacidad"></td>
                     </tr>
                     

                     <tr>
                     <td><label for="hermanos">Hermanos</label></td>

                     <td><select name="hermanas">
                     	  <option value=Si>Si</option>
                     	  <option value=No>No</option>
                     </select></td>
                     </tr>


                      <tr>
                         <td><label for="cuantos">Cuantos</label></td>
                         <td><input type="text" name="numdeher" required placeholder="Cuantos"></td>
                     </tr>

                     <tr>
                     <td><label for="necesidadesE">Necesidades especiales:</label></td>
                     <td><select name="nesecidadesesp">
                     	  <option value=Si>Si</option>
                     	  <option value=No>No</option>
                     </select></td>
                     </tr>

                      <tr>
                         <td><label for="cuales"></label></td>
                         <td><input type="text" name="nesespcua" required placeholder="Cuales"></td>
                     </tr>

                    
                    <tr>
                    <td><input type="submit" value="Aceptar"></td>
                    <td><button><a href="ListAlumno.php">Cancelar</a></button></td>
                    </tr>
           	    </form>
           </table>
    </body>
</html>
