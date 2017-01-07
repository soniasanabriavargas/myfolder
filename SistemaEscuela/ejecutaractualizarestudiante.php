<?php
extract($_POST);//extraer todos los valores del metodo post del formulario de actualizar
	require("conexion.php");


	
	
		$sentencia="UPDATE estudiante set  nombre='$nombre', apeidos='$apeidos', edad='$edad', sexo='$sexo', fechanac='$fechanac', CURP='$CURP', matricula='$matricula', telefono='$telefono', tutor='$tutor', NombreT='$NombreT', apeidost='$apeidost',domicilio='$domicilio', Localidad='$Localidad', municipio='$municipio', entfed='$entfed', grado='$grado', grupo='$grupo', pagoinscri='$pagoinscri', pagoprueb='$pagoprueb', status='$status', apoyo='$apoyo', apoyo2='$apoyo2', alergias='$alergias', tiposangre='$tiposangre', discapacidad='$discapacidad', hermanas='$hermanas', numdeher='$numdeher', nesecidadesesp='$nesecidadesesp', nesespcua='$nesespcua' 
		where id='$id'";

	    $resent=mysqli_query($conn,$sentencia);
		if ($resent==null) {  
			echo '<script>alert("Error de procesamiento, no se actulizaron los datos")</script>';
			header("location: ListAlumno.php");
			echo "<script>location.href='ListAlumno.php'</script>";
		}else {
			echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
			echo "<script>location.href='ListAlumno.php'</script>";	
		}
?>
