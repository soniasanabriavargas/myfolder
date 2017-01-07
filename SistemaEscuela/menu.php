<?php
session_start();
  if (@!$_SESSION['usuario']) {
    header("Location:index.php");
  }
?>  

<!DOCTYPE html>
<html lang="es">
	 <head>
	      <title>Menu</title>
	          <meta charset="utf-8">
	          <link href="css/style.css"  rel="stylesheet" type="text/css"/>        
	 </head>
	 <body>
	      <header>
	               <ul class="nav pull-right">
	                  Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong><!--Muestra el usuario que ingreso a la cuenta-->
	                  <a href="desconectar.php" class="btn btn-info" role="button">Cerrar secion</a><!--Boton Cerrar Cesion-->
	               </ul>           
	       <nav>

	                <div class="container">
	                 <button><a href="ListAlumno.php"  class="btn btn-info" role="button">ALUMNOS</a></button>
	                 <button><a href="ListMaestro.php"  class="btn btn-info" role="button">MAESTROS</a></button> 
	                </div>
	       </nav>
	          
	       </header>
	 </body>
</html>