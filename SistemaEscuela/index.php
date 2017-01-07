<!DOCTYPE html>
<html lang="es">
    <head>
    	<title>Login</title>
        <meta charset="UTF-8">
    </head>
    <body>
       <center>
         <table>    
            	<form action="validaruser.php" method="post">
                    <tr>
                    <td>
            		<label for="name">Usuario</label>
                    </td>
                    <td>
            		<input type="text" name="user" required placeholder="Usuario">
                    </td>
            		</tr>
                   
                    <tr>
                    <td>
            		<label for="name">Contraseña</label>
                    </td>
                    <td>
            		<input type="password" name="password" required placeholder="Contraseña">
                    </td>
            		</tr>

                    <tr>
                    <td>
            		<input type="submit" value="Aceptar">
                    </td>
                    </tr>
        	   </form>
         </table>
      </center>
    </body>
</html>
