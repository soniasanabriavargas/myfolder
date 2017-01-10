<html>
     <head>
          <tilte>Lista comités</tilte>
          <meta charset="utf-8">
          <link  href="css/style.css" rel="stylesheet" type="text/css"/>
     </head>
     <body>

     	 <h2>COMITES</h2>

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
       
         <button><a href="menu.php">Regresar al menu</a></button>
   
     </body>
</html>