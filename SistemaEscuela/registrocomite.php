<!DOCTYPE html>
<html>
    <head>
	     <title>Registro comite</title>
	     <meta charset="utf-8">
    </head>
    <body>

       <?php
         $id = $_GET['id'];
         echo $id;
       ?>
        <h2>Dar de alta comite</h2>

         <table>
           <form action="procesarcomite.php" method="post">
             <tr>
             	<td><label for="puesto">Puesto:</label></td>
             	<td><input type="text" name="puesto" required="puesto" placeholder="Puesto"></td>
             </tr>

             <tr>
             	<td><label for="nombre">Nombre:</label></td>
             	<td><input type="text" name="nombre" required="nombre" placeholder="Nombre"></td>
             </tr>

             <tr>
             	<td><label for="domicilio">Domicilio:</label></td>
             	<td><input type="text" name="domicilio" required="domicilio" placeholder="Domicilio"></td>
             </tr>

             <tr>
             	<td><label for="telefono">Telefono:</label></td>
             	<td><input type="text" name="telefono" required="telefono" placeholder="Telefono"></td>
             </tr>

             <tr>
             	<td><label for="CURP">CURP:</label></td>
             	<td><input type="text" name="CURP" required="CURP" placeholder="CURP"></td>
             </tr>

             <tr>
                <td><input type="submit" value="Aceptar"></td>
                <td><button><a href="Listcomite.php">Cancelar</a></button></td>
             </tr>
             </form>
         </table>
    </body>
</html>