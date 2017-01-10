<?php
session_start();
if (@!$_SESSION['usuario']) {/*arroba oculta mensaje de error, que posiblemente pudiera salir al autentificarse*/
	header("Location:index.php");
}
?>	

<!DOCTYPE html>	
<html lang="es">
	  <head>
		   <title></title>
			    <meta charset="utf-8">
			    <link href="css/style.css"  rel="stylesheet" type="text/css"/> 
			   
	  </head>
	  <body>
		    <header class="header">
		       <ul class="nav pull-right">
		        Welcome <strong><?php echo $_SESSION['usuario'];?></strong>
		        <!--Muestra el usuario que ingreso a la cuenta-->
		       </ul>
		    </header>

<!--///////////////////////////////Inicia cuerpo interno///////////////////////////////-->
		    <?php
				 extract($_GET);
				require("conexion.php");

				$consulta="SELECT * FROM maestro WHERE id=$id";

				$resql=mysqli_query($conn,$consulta);

				while ($row=mysqli_fetch_row ($resql)){
				    	 $id=$row[0];
						 $nombre=$row[1];
						 $apeidos=$row[2];
					     $calle=$row[3];
					     $numero=$row[4];
					     $localidad=$row[5];
					     $municipio=$row[6];
					     $puesto= $row[7];
					     $gradoQA= $row[8];
					     $numalum= $row[9];
					     $telefono= $row[10];
					     $sexo= $row[11];
					     $fechanac= $row[12];
					     $CURP= $row[13];
					     $RFC= $row[14];
					     $correoelet= $row[15];
					     $fechadeIA= $row[16];
					     $status= $row[17];
					     $ClavedeC= $row[18];
					     $ClavedeN= $row[19];				    
					     $numerodeAIMS= $row[20];
					     $gradomaximoE= $row[21];
					     $CarreraM= $row[22];
					     $CarreraMcual= $row[23];
					     $K= $row[24];
					     $kcual= $row[25];
				    }
		  
				?>
		       
		       <h2>ACTUALIZAR MAESTRO</h2>

	                <table>
		           	    <form action="ejecutaractualizarmaestro.php" method="post">
						   <tr>
						    <!--<td><label for="id">id:</label></td>-->
						   	<td><input type="hidden" name="id" value="<?php echo $id?>" readonly="readonly"></td>
						   </tr>

		                   <tr>
		                    <td><label for="name">Nombre:</label></td>              
		                    <td><input type="text" name="nombre" value="<?php echo $nombre?>"></td>
		                    </tr>

		                    <tr>
		                    <td><label for="apeidos">Apellidos:</label></td>              
		                    <td><input type="text" name="apeidos" value="<?php echo $apeidos?>"></td>
		                    </tr>

		             	    <tr>
		             	     <td><label for="calle">Domicilio:</label></td>
		             	     <td><input type="text" name="calle" value="<?php echo $calle?>"></td>
		             	    </tr>

		                    <tr>
		                    <td><label for="numero">Numero:</label></td>
		                    <td><input type="text" name="numero" value="<?php echo $numero?>"></td>
		                    </tr>
		          
		                      
		                    <tr>
		                    <td><label for="localidad">Localidad:</label></td>
		                    <td><input type="text" name="localidad" value="<?php echo $localidad?>"></td>
		                    </tr>


		                    <tr>
		                    <td><label for="municipio">Municipio:</label></td>
		                    <td><input type="text" name="municipio" value="<?php echo $municipio?>"></td>
		                    </tr>

		                    <tr>
		                    <td><label for="puesto">Funcion:</label></td>
		                    <td><input type="text" name="puesto" value="<?php echo $puesto?>"></td>
		                    </tr>
		                    
		                    <tr>
		                    <td><label for="gradoQA">Grado que atiende:</label></td>
		                    <td><input type="text" name="gradoQA" value="<?php echo $gradoQA?>"></td>
		                    </tr>


		                    <tr>
		                    <td><label for="numalum">Numero de alumnos:</label></td>
		                    <td><input type="text" name="numalum" value="<?php echo $numalum?>"></td>
		                    </tr>

		                    <tr>
		                    <td><label for="telefono">Telofono:</label></td>
		                    <td><input type="text" name="telefono" value="<?php echo $telefono?>"></td>
		                    </tr>
		                     

		                    <tr>
		                    <td><label for="sexo">Sexo:</label></td>
		                    <td><input type="text" name="sexo" value="<?php echo $sexo?>"></td>
		                    </tr>

		                    <tr>
		                    <td><label for="fechanac">Fecha de nacimiento:</label></td>
		                    <td><input type="date" name="fechanac" value="<?php echo $fechanac?>">
		                     </td>
		                    </tr>

		                     <tr>
		                    <td><label for="CURP">CURP:</label></td>
		                    <td><input type="text" name="CURP" value="<?php echo $CURP?>">
		                     </td>
		                    </tr>
		                     
		                     <tr>
		                     <td><label for="RFC">RFC:</label></td>
		                     <td><input type="text" name="RFC" value="<?php echo $RFC?>"></td>
		                     </tr>


		                     <tr>
		                     <td><label for="correoelet">Correo electronico:</label></td>
		                     <td>
		                     <input type="text" name="correoelet" value="<?php echo $correoelet?>">
		                     </td>
		                     </tr>


		                     <tr>
		                     <td><label for="fechadeIA">Fecha de ingreso al sistema:</label></td>
		                     <td><input type="text" name="fechadeIA" value="<?php echo $fechadeIA?>">
		                     </td>
		                     </tr>


		                     <tr>
		                     <td><label for="status">Status:</label></td>
		                     <td>
		                     <input type="text" name="status" value="<?php echo $status?>">
		                     </td>
		                     </tr>

		                                 
		                     <tr>
		                     <td><label for="ClavedeC">Clave de cobro:</label></td>
		                     <td><input type="text" name="ClavedeC" value="<?php echo $ClavedeC?>"></td>
		                     </tr>

		                     
		                     <tr>
		                     <td>
		                     <label for="ClavedeN">Clave de nombramiento:</label>
		                     </td>
		                     <td>
		                     <input type="text" name="ClavedeN" value="<?php echo $ClavedeN?>">
		                     </td>
		                     </tr>
		                     

		                     <tr>
		                     <td><label for="numerodeAIMS">Numero de afiliacion al IMS:</label></td>
		                     <td><input type="text" name="numerodeAIMS" value="<?php echo $numerodeAIMS?>"></td>
		                     </tr>
		                     

		                     <tr>
		                     <td><label for="gradomaximoE">Grado maximo de estudios:</label></td>
		                     <td><input type="text" name="gradomaximoE" value="<?php echo $gradomaximoE?>"></td>
		                     </tr>

		                     <tr>
		                     <td><label for="CarreraM">Carrera magisterial:</label></td>
		                     <td><input type="text" name="CarreraM" value="<?php echo $CarreraM?>"></td>
		                     </tr>


		                     

		                     <tr>
		                     <td><label for="CarreraMcual">Cual:</label></td>
		                     <td><input type="text" name="CarreraMcual" value="<?php echo $CarreraMcual?>"></td>
		                     </tr>


		                     <tr>
		                     <td><label for="K">K:</label></td>
		                     <td><input type="text" name="K" value="<?php echo $K?>"></td>
		                     </tr>

		                     <tr>
		                     <td><label for="kcual">Cual:</label></td>
		                     <td><input type="text" name="kcual" value="<?php echo $kcual?>"></td>
		                     </tr>
		                     		                    		                    
		                    <tr>
		                    <td><input type="submit" value="Guardar"></td>
		                    <td><button><a href="ListMaestro.php">Cancelar</a></button></td>
		                    </tr>
		           	    </form>
		           </table>				   
<!--////////////////////////////////////Fin cuerpo interno///////////////////////////////-->
	  </body>
</html> 


