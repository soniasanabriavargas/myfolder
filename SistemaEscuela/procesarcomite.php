<?php
   
   $cargo = $_POST['cargo'];
   $nombre = $_POST['nombre'];
   $apellidos = $_POST['apellidos'];
   $domicilio = $_POST['domicilio'];
   $telefono = $_POST['telefono'];
   $CURP = $_POST['CURP'];
   $id = $_GET['id'];
   
    echo $id;
   require("conexion.php");

   mysqli_select_db($conn, "schoolDB");
   $tildes =$conn->query("SET NAMES 'utf8'");


   $query=mysqli_query($conn,"INSERT INTO `schoolDB`.`comiteintegrante`(`id`, `cargo`, `nombre`, `apellidos`, `domicilio`, `telefono`, `CURP`, `comite_id`) 


          VALUES(NULL, '$cargo', '$nombre', '$apellidos', '$domicilio', '$telefono', '$CURP', '$id')"); 
        
        if (!$query) {
            die("Invalid query: " . mysqli_error($conn));
                }else{ 
         

             echo ' <script language="javascript">alert("Integrante comite registrado satisfactoriamente");</script> ';
             //echo `Se ha registrado con exito`;
             echo "<script>location.href='integrantesList.php?id=$id'</script>";   
               echo "Success"; 
           } 
               mysqli_close($conn);
            

?>