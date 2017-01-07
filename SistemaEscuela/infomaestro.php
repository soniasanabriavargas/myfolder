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
					     $gradoQA= $row[7];
					     $telefono= $row[8];
					     $sexo= $row[9];
					     $fechanac= $row[10];
					     $CURP= $row[11];
					     $RFC= $row[12];
					     $correoelet= $row[13];
					     $fechadeIA= $row[14];
					     $status= $row[15];
					     $ClavedeC= $row[16];
					     $ClavedeN= $row[17];				    
					     $numerodeAIMS= $row[18];
					     $gradomaximoE= $row[19];
					     $CarreraM= $row[20];
					     $CarreraMcual= $row[21];
					     $K= $row[22];
					     $kcual= $row[23];
				    }
		  
				?>
		       
		       <h2>INFORMACION COMPLETA DEL MAESTRO</h2>

	                <table>
		           	    <form action="ejecutareliminarmaestro.php" method="post">
						   <tr>
						    <!--<td><label for="id">id:</label></td>-->
						   	<td><input type="hidden" name="id" value="<?php echo $id?>" readonly="readonly"></td>
						   </tr>

		                   <tr>
		                    <td><label for="name">Nombre:</label></td>              
		                    <td><input type="text" name="nombre" value="<?php echo $nombre?>" readonly="readonly"></td>
		                    </tr>

		                    <tr>
		                    <td><label for="apeidos">Apeidos:</label></td>              
		                    <td><input type="text" name="apeidos" value="<?php echo $apeidos?>" readonly="readonly"></td>
		                    </tr>

		             	    <tr>
		             	     <td><label for="calle">Domicilio:</label></td>
		             	     <td><input type="text" name="calle" value="<?php echo $calle?>" readonly="readonly"></td>
		             	    </tr>

		                    <tr>
		                    <td><label for="numero">Numero:</label></td>
		                    <td><input type="text" name="numero" value="<?php echo $numero?>" readonly="readonly"></td>
		                    </tr>
		          
		                      
		                    <tr>
		                    <td><label for="localidad">Localidad:</label></td>
		                    <td><input type="text" name="localidad" value="<?php echo $localidad?>" readonly="readonly"></td>
		                    </tr>


		                    <tr>
		                    <td><label for="municipio">Municipio:</label></td>
		                    <td><input type="text" name="municipio" value="<?php echo $municipio?>" readonly="readonly"></td>
		                    </tr>
		                    
		                    <tr>
		                    <td><label for="gradoQA">Grado que atiende:</label></td>
		                    <td><input type="text" name="gradoQA" value="<?php echo $gradoQA?>" readonly="readonly"></td>
		                    </tr>

		                    <tr>
		                    <td><label for="telefono">Telofono:</label></td>
		                    <td><input type="text" name="telefono" value="<?php echo $telefono?>" readonly="readonly"></td>
		                    </tr>
		                     

		                    <tr>
		                    <td><label for="sexo">Sexo:</label></td>
		                    <td><input type="text" name="sexo" value="<?php echo $sexo?>" readonly="readonly"></td>
		                    </tr>

		                    <tr>
		                    <td><label for="fechanac">Fecha de nacimiento:</label></td>
		                    <td><input type="date" name="fechanac" value="<?php echo $fechanac?>" readonly="readonly">
		                     </td>
		                    </tr>

		                     <tr>
		                    <td><label for="CURP">CURP:</label></td>
		                    <td><input type="text" name="CURP" value="<?php echo $CURP?>" readonly="readonly">
		                     </td>
		                    </tr>
		                     
		                     <tr>
		                     <td><label for="RFC">RFC:</label></td>
		                     <td><input type="text" name="RFC" value="<?php echo $RFC?>" readonly="readonly"></td>
		                     </tr>


		                     <tr>
		                     <td><label for="correoelet">Correo electronico:</label></td>
		                     <td>
		                     <input type="text" name="correoelet" value="<?php echo $correoelet?>" readonly="readonly">
		                     </td>
		                     </tr>


		                     <tr>
		                     <td><label for="fechadeIA">Fecha de ingreso al sistema:</label></td>
		                     <td><input type="text" name="fechadeIA" value="<?php echo $fechadeIA?>" readonly="readonly">
		                     </td>
		                     </tr>


		                     <tr>
		                     <td><label for="status">Status:</label></td>
		                     <td>
		                     <input type="text" name="status" value="<?php echo $status?>" readonly="readonly">
		                     </td>
		                     </tr>

		                                 
		                     <tr>
		                     <td><label for="ClavedeC">Clave de cobro:</label></td>
		                     <td><input type="text" name="ClavedeC" value="<?php echo $ClavedeC?>" readonly="readonly"></td>
		                     </tr>

		                     
		                     <tr>
		                     <td>
		                     <label for="ClavedeN">Clave de nombramiento:</label>
		                     </td>
		                     <td>
		                     <input type="text" name="ClavedeN" value="<?php echo $ClavedeN?>" readonly="readonly">
		                     </td>
		                     </tr>
		                     

		                     <tr>
		                     <td><label for="numerodeAIMS">Numero de afiliacion al IMS:</label></td>
		                     <td><input type="text" name="numerodeAIMS" value="<?php echo $numerodeAIMS?>" readonly="readonly"></td>
		                     </tr>
		                     

		                     <tr>
		                     <td><label for="gradomaximoE">Grado maximo de estudios:</label></td>
		                     <td><input type="text" name="gradomaximoE" value="<?php echo $gradomaximoE?>" readonly="readonly"></td>
		                     </tr>

		                     <tr>
		                     <td><label for="CarreraM">Carrera magisterial:</label></td>
		                     <td><input type="text" name="CarreraM" value="<?php echo $CarreraM?>" readonly="readonly"></td>
		                     </tr>


		                     

		                     <tr>
		                     <td><label for="CarreraMcual">Cual:</label></td>
		                     <td><input type="text" name="CarreraMcual" value="<?php echo $CarreraMcual?>" readonly="readonly"></td>
		                     </tr>


		                     <tr>
		                     <td><label for="K">K:</label></td>
		                     <td><input type="text" name="K" value="<?php echo $K?>" readonly="readonly"></td>
		                     </tr>

		                     <tr>
		                     <td><label for="kcual">Cual:</label></td>
		                     <td><input type="text" name="kcual" value="<?php echo $kcual?>" readonly="readonly"></td>
		                     </tr>
		                     		                    		                    
		                    <tr>
		                    <td><button><a href="ListMaestro.php">Regresar ala lista</a></button></td>
		                    </tr>
		           	    </form>
		           </table>				   
<!--//////////////////////////Fin cuerpo interno///////////////////////////////-->
	  </body>
</html> 


