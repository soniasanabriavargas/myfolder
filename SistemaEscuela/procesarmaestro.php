<?php
         $nombre= $_POST ['nombre'];
         $apeidos= $_POST ['apeidos'];
         $calle= $_POST ['calle'];
         $numero= $_POST ['numero'];
         $localidad= $_POST ['localidad'];
         $municipio= $_POST ['municipio'];
         $puesto= $_POST ['puesto'];
         $gradoQA= $_POST ['gradoQA'];
         $numalum= $_POST ['numalum'];
         $telefono= $_POST ['telefono'];
         $sexo= $_POST ['sexo'];
         $fechanac= $_POST ['fechanac'];
         $CURP= $_POST ['CURP'];
         $RFC= $_POST ['RFC'];
         $correoelet= $_POST ['correoelet'];
         $fechadeIA= $_POST ['fechadeIA'];
         $status= $_POST ['status'];
         $ClavedeC= $_POST ['ClavedeC'];
         $ClavedeN= $_POST ['ClavedeN'];
         $numerodeAIMS= $_POST ['numerodeAIMS'];
         $gradomaximoE= $_POST ['gradomaximoE'];
         $CarreraM= $_POST ['CarreraM'];
         $CarreraMcual= $_POST ['CarreraMcual'];
         $K= $_POST ['K'];
         $kcual= $_POST ['kcual'];



    require("conexion.php");
        mysqli_select_db($conn, "schoolDB");
        $tildes =$conn->query("SET NAMES 'utf8'");
      
        $query=mysqli_query($conn,"INSERT INTO `schoolDB`.`maestro`(`id`, `nombre`, `apeidos`, `calle`, `numero`, `localidad`, `municipio`, `puesto`,`gradoQA`, `numalum`, `telefono`, `sexo`, `fechanac`, `CURP`, `RFC`, `correoelet`, `fechadeIA`, `status`, `ClavedeC`, `ClavedeN`, `numerodeAIMS`, `gradomaximoE`, `CarreraM` ,`CarreraMcual`, `K`, `kcual`) 


          VALUES(NULL, '$nombre', '$apeidos', '$calle', '$numero', '$localidad', '$municipio', '$puesto', '$gradoQA', '$numalum', '$telefono', '$sexo', '$fechanac', '$CURP','$RFC', '$correoelet', '$fechadeIA', '$status', '$ClavedeC', '$ClavedeN', '$numerodeAIMS', '$gradomaximoE','$CarreraM', '$CarreraMcual', '$K', '$kcual')"); 
        
        if (!$query) {
            die("Invalid query: " . mysqli_error($conn));
                }else{ 
         

             echo ' <script language="javascript">alert("Maestro Registrado Satisfactoriamente");</script> ';
             //echo `Se ha registrado con exito`;
             echo "<script>location.href='ListMaestro.php'</script>";   
               echo "Success"; 
           } 
               mysqli_close($conn);
            
?>  



