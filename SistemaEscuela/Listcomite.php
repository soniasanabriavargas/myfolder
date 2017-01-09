<html>
     <head>
     <tilte></tilte>
     <meta charset="utf-8">
     </head>
     <body>
     	 <h2>COMITES</h2>
     	 <!--<table>
     	 	  
     	 	  	<tr><td><a href="integrantesList.php">Sociedad de padres</a></td></tr>
     	 	  	<tr><td><a href="integrantesList.php">Participacion Social</a></td></tr>
     	 	  	<tr><td><a href="integrantesList.php">CAS</a></td></tr>
     	 	  	<tr><td><a href="integrantesList.php">Seguridad y emergencia</a></td></tr>
     	 	  	<tr><td><a href="integrantesList.php">Bebederos</a></td></tr>
     	 	  	<tr><td><a href="integrantesList.php">Diciplina</a></td></tr>
     	 	  	<tr><td><a href="integrantesList.php">Desayunos</a></td></tr>
     	 	  	<tr><td><a href="integrantesList.php">Comite de seguridad de emergencia</a></td></tr>
     	 	  	<tr><td><a href="integrantesList.php">Otro</a></td></tr>
     	 	  
     	 </table>-->



     	    <?php
                    require("conexion.php");
                     
                     $sql = "SELECT * from comite";
                     //$sql=("SELECT * FROM maestro");

                    
                     $query=mysqli_query($conn,$sql);
                        echo "<table class='table table-bordered';>";
                        echo "<tr class='warning'>";
                        //echo "<th>Id</th>";
                         echo "<th>Nombre comite</th>";
                                      
                      echo "</tr>";
                  ?>

                  <?php 
                 
                       while($arreglo=mysqli_fetch_array($query)){
                           echo "<tr>"; echo "<form method='post'>";
                           
                            echo "<td><a href='integrantesList.php?id=".$arreglo[0]."'>$arreglo[1]</a><input type='hidden' nombre='id' value='$arreglo[0]'></td>";
                         
                           

                            echo '</form>';

                           echo "</tr>";   
                      }

                      echo "</table>";
                  ?>
     </body>
</html>