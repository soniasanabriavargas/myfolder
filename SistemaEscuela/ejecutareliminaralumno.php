<?php

	require("conexion.php");

	  $id = $_POST['id'];
	  mysqli_query($conn, "DELETE from estudiante where id='$id'")
	    or die("Error al eliminar los datos");
	      mysqli_close($conn);
	       echo '<script>alert("Usuario Eliminado")</script> ';
            echo "<script>location.href='ListAlumno.php'</script>";
	       // header("Location: ListAlumno.php" );
	         //die();

?>
