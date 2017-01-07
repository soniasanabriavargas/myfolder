<?php
session_start();
  if (@!$_SESSION['usuario']) {/*arroba oculta mensaje de error, que posiblemente pudiera salir al autentificarse*/
	 header("Location:index.php");
  }
?>
<!DOCTYPE html>		
<html lang="es">
	  <head>
		    <title>UVA</title>
			<meta charset="utf-8">
			<link href="css/style.css"  rel="stylesheet" type="text/css"/>
	</head>
	<body>
	     <header class="header">
	       <ul class="nav pull-right">
	        Welcome <strong><?php echo $_SESSION['usuario'];?></strong>
	        <!--Muestra el usuario que inicio secion-->
	        </ul>
	    </header>

<!--/////////////////////////////Inicia cuerpo interno///////////////////////////////-->	
			<?php
			extract($_GET);
			require("conexion.php");

			$sql="SELECT * FROM estudiante WHERE id=$id";

			$ressql=mysqli_query($conn,$sql);
			    while ($row=mysqli_fetch_row ($ressql)){
			    	$id=$row[0];
						 $nombre=$row[1];
						 $apeidos=$row[2];
					     $edad=$row[3];
					     $sexo=$row[4];
					     $fechanac=$row[5];
					     $CURP=$row[6];
					     $matricula= $row[7];
					     $telefono= $row[8];
					     $tutor= $row[9];
					     $NombreT= $row[10];
					     $apeidost= $row[11];
					     $domicilio= $row[12];
					     $Localidad= $row[13];
					     $municipio= $row[14];
					     $entfed= $row[15];
					     $grado= $row[16];
					     $grupo= $row[17];				    
					     $pagoinscri= $row[18];
					     $pagoprueb= $row[19];
					     $status= $row[20];
					     $apoyo= $row[21];
					     $apoyo2= $row[22];
					     $alergias= $row[23];
					     $tiposangre= $row[24];
					     $discapacidad= $row[25];
					     $hermanas= $row[26];
					     $numdeher= $row[27];
					     $nesecidadesesp= $row[28];
					     $nesespcua = $row[29];
     
				    }
		  
				?>
		       
		       <h2>ACTUALIZAR ESTUDIANTE</h2>

	                <table>
		           	    <form action="ejecutareliminaralumno.php" method="post">
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
		             	     <td><label for="edad">Edad:</label></td>
		             	     <td><input type="text" name="edad" value="<?php echo $edad?>" readonly="readonly"></td>
		             	    </tr>

		                    <tr>
		                    <td><label for="sexo">Sexo:</label></td>
		                    <td><input type="text" name="sexo" value="<?php echo $sexo?>" readonly="readonly"></td>
		                    </tr>
		          
		                      
		                    <tr>
		                    <td><label for="fecha de nacimiento">Fecha de nacimiento:</label></td>
		                    <td><input type="date" name="fechanac" value="<?php echo $fechanac?>" readonly="readonly"></td>
		                    </tr>


		                    <tr>
		                    <td><label for="CURP">CURP:</label></td>
		                    <td><input type="text" name="CURP" value="<?php echo $CURP?>" readonly="readonly"></td>
		                    </tr>
		                    
		                    <tr>
		                    <td><label for="matricula">Matrícula:</label></td>
		                    <td><input type="text" name="matricula" value="<?php echo $matricula?>" readonly="readonly"></td>
		                    </tr>

		                    <tr>
		                    <td><label for="telefono">Telofono:</label></td>
		                    <td><input type="text" name="telefono" value="<?php echo $telefono?>" readonly="readonly"></td>
		                    </tr>
		                     

		                    <tr>
		                    <td><label for="tutor">Tutor:</label></td>
		                    <td><input type="text" name="tutor" value="<?php echo $tutor?>" readonly="readonly"></td>
		                    </tr>

		                    <tr>
		                    <td><label for="nombreT">Nombre Tutor:</label></td>
		                    <td><input type="text" name="NombreT" value="<?php echo $NombreT?>" readonly="readonly">
		                     </td>
		                    </tr>

		                     <tr>
		                    <td><label for="apeidost">Apeidos Tutor:</label></td>
		                    <td><input type="text" name="apeidost" value="<?php echo $apeidost?>" readonly="readonly">
		                     </td>
		                    </tr>
		                     
		                     <tr>
		                     <td><label for="domicilio">Domicilio:</label></td>
		                     <td><input type="text" name="domicilio" value="<?php echo $domicilio?>" readonly="readonly"></td>
		                     </tr>


		                     <tr>
		                     <td><label for="Localidad">Localidad:</label></td>
		                     <td>
		                     <input type="text" name="Localidad" value="<?php echo $Localidad?>" readonly="readonly">
		                     </td>
		                     </tr>


		                     <tr>
		                     <td><label for="Municipio">Municipio:</label></td>
		                     <td><input type="text" name="municipio" value="<?php echo $municipio?>" readonly="readonly">
		                     </td>
		                     </tr>


		                     <tr>
		                     <td><label for="entidad">Entidad:</label></td>
		                     <td>
		                     <input type="text" name="entfed" value="<?php echo $entfed?>" readonly="readonly">
		                     </td>
		                     </tr>

		                                 
		                     <tr>
		                     <td><label for="grado">Grado:</label></td>
		                     <td><input type="text" name="grado" value="<?php echo $grado?>" readonly="readonly"></td>
		                     </tr>

		                     
		                     <tr>
		                     <td>
		                     <label for="grupo">Grupo:</label>
		                     </td>
		                     <td>
		                     <input type="text" name="grupo" value="<?php echo $grupo?>" readonly="readonly">
		                     </td>
		                     </tr>
		                     

		                     <tr>
		                     <td><label for="pagoI">Pago Inscripción:</label></td>
		                     <td><input type="text" name="pagoinscri" value="<?php echo $pagoinscri?>" readonly="readonly"></td>
		                     </tr>
		                     

		                     <tr>
		                     <td><label for="pagoP">Pago de pruebas:</label></td>
		                     <td><input type="text" name="pagoprueb" value="<?php echo $pagoprueb?>" readonly="readonly"></td>
		                     </tr>

		                     <tr>
		                     <td><label for="status">Status Alumno:</label></td>
		                     <td><input type="text" name="status" value="<?php echo $status?>" readonly="readonly"></td>
		                     </tr>


		                     

		                     <tr>
		                     <td><label for="apoyo">Apoyo prospera u otro:</label></td>
		                     <td><input type="text" name="apoyo" value="<?php echo $apoyo?>" readonly="readonly"></td>
		                     </tr>

		                     <tr>
		                     <td><label for="cual">Cual</label></td>
		                     <td><input type="text" name="apoyo2" value="<?php echo $apoyo2?>" readonly="readonly"></td>
		                     </tr>


		                     <tr>
		                     <td><label for="alergias">Alergias:</label></td>
		                     <td><input type="text" name="alergias" value="<?php echo $alergias?>" readonly="readonly"></td>
		                     </tr>

		                     <tr>
		                     <td><label for="tipoS">Tipo de Sangre:</label></td>
		                     <td><input type="text" name="tiposangre" value="<?php echo $tiposangre?>" readonly="readonly"></td>
		                     </tr>
		                     

		                     <tr>
		                     <td><label for="discapacidad">Discapacidad:</label></td>
		                     <td><input type="text" name="discapacidad" value="<?php echo $discapacidad?>" readonly="readonly"></td>
		                     </tr>
		                     

		                     <tr>
		                     <td><label for="hermanos">Hermanos</label></td>
		                     <td><input type="text" name="hermanas" value="<?php echo $hermanas?>" readonly="readonly"></td>
		                     </tr>


		                     <tr>
		                     <td><label for="cuantos">Cuantos</label></td>
		                     <td><input type="text" name="numdeher" value="<?php echo $numdeher?>" readonly="readonly"></td>
		                     </tr>

		                     <tr>
		                     <td><label for="necesidadesE">Necesidades especiales:</label></td>
		                     <td><input type="text" name="nesecidadesesp" value="<?php echo $nesecidadesesp?>" readonly="readonly"></td>
		                     </tr>

		                      <tr>
		                         <td><label for="cuales"></label></td>
		                         <td><input type="text" name="nesespcua" value="<?php echo $nesespcua?>" readonly="readonly"></td>
		                     </tr>

		                    
		                    <tr>
		                    
		                    <td><button><a href="ListAlumno.php">Regresar ala lista</a></button></td>
		                    </tr>
		           	    </form>
		           </table>				   
<!--////////////////////////////////////////////Fin cuerpo interno///////////////////////////////-->
	  </body>
</html> 


