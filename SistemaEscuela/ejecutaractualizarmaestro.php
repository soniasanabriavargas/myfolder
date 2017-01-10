<?php
extract($_POST);//extraer todos los valores del metodo post del formulario de actualizar
	require("conexion.php");


	
	
		$sentencia="UPDATE maestro set  nombre='$nombre', apeidos='$apeidos', calle='$calle', numero='$numero', localidad='$localidad', municipio='$municipio', puesto='$puesto', gradoQA='$gradoQA', numalum='$numalum', telefono='$telefono', sexo='$sexo', fechanac='$fechanac', CURP='$CURP',RFC='$RFC', correoelet='$correoelet', fechadeIA='$fechadeIA', status='$status', ClavedeC='$ClavedeC', ClavedeN='$ClavedeN', numerodeAIMS='$numerodeAIMS', gradomaximoE='$gradomaximoE', CarreraM='$CarreraM', CarreraMcual='$CarreraMcual', K='$K', kcual='$kcual'where id='$id'";

	    $resent=mysqli_query($conn,$sentencia);
		if ($resent==null) {  
			echo '<script>alert("Error de procesamiento, no se actulizaron los datos")</script>';
			header("location: ListMaestro.php");
			echo "<script>location.href='ListMaestro.php'</script>";
		}else {
			echo '<script>alert("Registro actualizado")</script> ';
			echo "<script>location.href='ListMaestro.php'</script>";	
		}
?>
