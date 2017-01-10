<?php
session_start();
  if (@!$_SESSION['usuario']) {
    header("Location:index.php");
  }
?> 

<!DOCTYPE html>
<html lang="es">
     <head>
	       <title>Registro Mestro</title>
	       <meta charset="UTF-8">
         <link href="css/style.css" rel="stylesheet" type="text/css"/>
     </head>
     <body>
         <h2>REGISTRO DEL MAESTRO</h2>

          <table>

            <form action="procesarmaestro.php" method="post">
             <tr>
                <td><label for="name">Nombre</label></td>
                <td><input type="text" name="nombre" required="nombre" placeholder="Nombre"></td>
             </tr>

             <tr>
                <td><label for="apellidos">Apellidos</label></td>
                <td><input type="text" name="apeidos" required="apellidos" placeholder="Apellidos"></td>
             </tr>

             <tr>
                <td><label for="calle">Domicilio</label></td>
                <td><input type="text" name="calle" required="calle" placeholder="Calle"></td>
             </tr>

             <tr>
                <td> <label for="numero">Numero</label></td>
                <td><input type="text" name="numero" required="numero" placeholder="Numero"></td>
             </tr>

             <tr>
                <td> <label for="localidad">Localidad</label></td>
                <td><input type="text" name="localidad" required="localidad" placeholder="Localidad"></td>
             </tr>

             <tr>
                <td> <label for="municipio">Municipio</label></td>
                <td><input type="text" name="municipio" required="municipio" placeholder="Municipio"></td>
             </tr>
                          
             <tr>
                <td><label for="puesto">Funcion</label></td>
             	<td>
                   <select name="puesto">
		                <option value="Director">Director</option>
                    <option value="Maestro">Maestro</option>
		                <option value="Auxiliar">Auxiliar</option>
		                <option value="Otro">Otro</option>
                    </select>
                </td>
             </tr>
             <tr>
                <td><label for="gradoQA">Grado que atiende</label></td>
             	  <td>
                   <select name="gradoQA">
                    <option value="N/A">N/A</option>
		                <option value="1A">1 A</option>
		                <option value="2A">2 A</option>
		                <option value="3A">3 A</option>
		                <option value="4A">4 A</option>
		                <option value="5A">5 A</option>
		                <option value="6A">6 A</option>
                    </select>
                </td>             	
             </tr>

             <tr>
                <td><label for="numalum">Numero de alumnos</label></td>
                <td><input type="text" name="numalum" required placeholder="Numero de alumnos"></td>
             </tr>

              <tr>
                <td><label for="telefono">Telefono</label></td>
                <td><input type="text" name="telefono" required="telefono" placeholder="Telefono"></td>
             </tr>

              <!--<tr>
                <td><label for="telefono">Telefono</label></td>
             	<td>
                   <select name="telefono">
		                <option value="Casa">Casa</option>
		                <option value="Celular">Celular</option>
		                <option value="Otro">Otro</option>
                    </select>
                </td>        	
             </tr>-->

             <!--<tr>
                <td><label for="sexo">Sexo</label></td>
             	<td>
                   <select name="sexo">
		                <option value="Mujer">Mujer</option>
		                <option value="Hombre">Hombre</option>
                    </select>
                </td>        	
             </tr>-->

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
                <td> <label for="CURP">CURP</label></td>
                <td><input type="text" name="CURP" required="CURP" placeholder="CURP"></td>
             </tr>

             <tr>
                <td> <label for="RFC">RFC</label></td>
                <td><input type="text" name="RFC" required="RFC" placeholder="RFC"></td>
             </tr>

             <tr>
                <td> <label for="correoelet">Correo Electronico</label></td>
                <td><input type="text" name="correoelet" required="correoelet" placeholder="Correo Electronico"></td>
             </tr>

            <tr>
                <td> <label for="fechadeIA">Fecha de ingreso al servicio</label></td>
                <td><input type="text" name="fechadeIA" required="fechadeIA" placeholder="Fecha de ingreso al servicio"></td>
             </tr>

             <tr>
                <td><label for="status">Status</label></td>
             	<td>
                   <select name="status">
		                <option value="Base Interino">Base Interino</option>
		                <option value="Otro">Otro</option>
                    </select>
                </td>        	
             </tr>

             <tr>
                <td> <label for="ClavedeC">Clave de cobro</label></td>
                <td><input type="text" name="ClavedeC" required="ClavedeC" placeholder="Clave de cobro"></td>
             </tr>

             <tr>
                <td> <label for="ClavedeN">Clave de nombramiento</label></td>
                <td><input type="text" name="ClavedeN" required="ClavedeN" placeholder="Clave de nombramiento"></td>
             </tr>

             <tr>
                <td> <label for="numerodeAIMS">Numero de Afiliacion al IMS</label></td>
                <td><input type="text" name="numerodeAIMS" required="numerodeAIMS" placeholder="Numero de Afiliacion al IMS"></td>
             </tr>

             <tr>
                <td><label for="gradomaximoE">Grado maximo de estudios</label></td>
             	<td>
                   <select name="gradomaximoE">
		                <option value="NormalB">Normal Basico</option>
		                <option value="Licenciatura">Licenciatura</option>
		                <option value="Maestria">Maestria</option>
		                <option value="Doctorado">Doctorado</option>
		                 <option value="Otro">Otro</option>
                    </select>
                </td>        	
             </tr>

               <tr>
                <td><label for="CarreraM">Carrera Magisterial</label></td>
             	<td>
                   <select name="CarreraM">
		                <option value="Si">Si</option>
		                <option value="No">No</option>
                    </select>
                </td>        	
               </tr>

              <tr>
                <td> <label for="cual">Cual</label></td>
                 <td>
                   <select name="CarreraMcual">
		                <option value="A">A</option>
		                <option value="B">B</option>
		                <option value="BC">BC</option>
		                <option value="C">C</option>
		                <option value="D">D</option>
		                <option value="E">E</option>
                    </select>
                  </td>        	
             </tr>

             <tr>
                  <td><label for="K">K</label></td>
                  <td>                   
                     <select name="K">
		                     <option value="Si">Si</option>
		                     <option value="No">No</option>		               
                      </select>
                   </td>                          	
              </tr>  
                   
              <tr>
                  <td> <label for="cual">Cual</label></td>
                  <td><input type="text" name="kcual"></td>
             	
             </tr> 

             <tr>
                  <td><input type="submit" value="Aceptar"></td>
                  <!--<td><a href="ListMaestro.php">Cancelar</a></td>-->
                  <td><button ><a href="ListMaestro.php">Cancelar</a></button></td>
            </tr>
           </form>         
          </table>

     </body>
</html>