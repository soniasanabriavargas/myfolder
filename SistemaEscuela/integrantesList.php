<!DOCTYPE html>
<html>
  <head>
	   <title>Lista de comités</title>
     <meta charset="utf-8">
     <link href="css/style.css" rel="stylesheet" type="text/css"/>
   </head>
  <body>

    
      <?php
      $id = $_GET['id'];
      ?>
      <form>

        <button><a href="Listcomite.php">Regresar ala lista de comités</a></button>

       
       <?php
         echo "<button><a href='registrarintegrantecomite.php?id=$id' >Dar de alta integrante de comité</a></button>";
       ?>
       </form>
       <?php
         
     //echo $id;

        require("conexion.php"); 
         $sql = "SELECT * from comiteintegrante where $id= comite_id";
         
    
         $query=mysqli_query($conn,$sql);
            echo "<table class='table table-bordered';>";
              echo "<tr class='warning'>";
              //echo "<th>Id</th>";
              echo "<th>Cargo</th>";
              echo "<th>Nombre</th>";
              echo "<th>Apellidos</th>";
              echo "<th>Domicilio</th>";
              echo "<th>Telefono</th>";
              echo "<th>CURP</th>";
              echo "<th>Editar</th>";
              echo "<th>Eliminar</th>";
              
                            
            echo "</tr>";
      ?>

      <?php 
     
           while($arreglo=mysqli_fetch_array($query)){
               echo "<tr>"; echo "<form method='post'>";
               echo "<td>$arreglo[6]</td>";
                 echo "<td>$arreglo[1]<input type='hidden' nombre='id' value='$arreglo[0]'></td>";
                 echo "<td>$arreglo[2]</td>";
                 echo "<td>$arreglo[3]</td>";
                 echo "<td>$arreglo[4]</td>";
                 echo "<td>$arreglo[5]</td>";


                echo "<td><a href='actualizarcomite.php?id=$arreglo[0]'><img id='imgprimaria' src='img/edit.png'></a></td>";

                echo "<td><a href='eliminarcomite.php?id=$arreglo[0]'>
                            <img id='imgprimaria' src='img/edit.png'></a></td>";

                
                 
                 echo '</form>';

               echo "</tr>";   
          }

          echo "</table>";
     ?>


   </body>
</html>
