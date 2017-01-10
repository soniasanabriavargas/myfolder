<!DOCTYPE html>
<html>
    <head>
         <title>Registro comite</title>
         <meta charset="utf-8">
         <link  href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

       <?php
         $id = $_GET['id'];
         //echo $id;
       ?>
        <h2>Dar de alta comité</h2>

         <table>
         <?php
         echo "<form action='procesarcomite.php?id=$id' method='post'>";
         ?>
           

             <tr>
                <td><label for="cargo">Cargo:</label></td>
                <td><input type="text" name="cargo" required="cargo" placeholder="Cargo"></td>
             </tr>

             <tr>
                <td><label for="nombre">Nombre:</label></td>
                <td><input type="text" name="nombre" required placeholder="Nombre"></td>
             </tr>

             <tr>
                <td><label for="apellidos">Apellidos:</label></td>
                <td><input type="text" name="apellidos" required="apellidos" placeholder="Apellidos"></td>
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
                <?php 
                echo "<td><button><a href='integrantesList.php?id=$id'>Cancelar</a></button>";
                
                echo "<input type='hidden' name='id' value='$id'>";
                ?>
                </td>
             </tr>
             </form>
         </table>
    </body>
</html>