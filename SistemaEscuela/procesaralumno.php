<?php
         $nombre= $_POST ['nombre'];
         $apeidos= $_POST ['apeidos'];
         $edad= $_POST ['edad'];
         $sexo= $_POST ['sexo'];
         $fechanac= $_POST ['fechanac'];
         $CURP= $_POST ['CURP'];
         $matricula= $_POST ['matricula'];
         $telefono= $_POST ['telefono'];
         $tutor= $_POST ['tutor'];
         $NombreT= $_POST ['NombreT'];
         $apeidost= $_POST ['apeidost'];
         $domicilio= $_POST ['domicilio'];
         $Localidad= $_POST ['Localidad'];
         $municipio= $_POST ['municipio'];
         $entfed= $_POST ['entfed'];
         $grado= $_POST ['grado'];
         $grupo= $_POST ['grupo'];
         $calificacion= $_POST ['calificacion'];
         $pagoinscri= $_POST ['pagoinscri'];
         $pagoprueb= $_POST ['pagoprueb'];
         $status= $_POST ['status'];
         $apoyo= $_POST ['apoyo'];
         $apoyo2= $_POST ['apoyo2'];
         $alergias= $_POST ['alergias'];
         $tiposangre= $_POST ['tiposangre'];
         $discapacidad= $_POST ['discapacidad'];
         $hermanas= $_POST ['hermanas'];
         $numdeher= $_POST ['numdeher'];
         $nesecidadesesp= $_POST ['nesecidadesesp'];
         $nesespcua = $_POST['nesespcua'];

         echo $apeidost;
     
    /* echo "$nombre<br/>";
     echo "$edad<br/>";
     echo "$sexo<br/>";
     echo "$CURP<br/>";
     echo "$matricula<br/>";
     echo "$telefono<br/>";
     echo "$tutor<br/>";
     echo "$NombreT<br/>";
     echo "$domicilio<br/>";
     echo "$Localidad<br/>";
     echo "$municipio<br/>";
     echo "$entfed<br/>";
     echo "$grado<br/>";
     echo "$grupo<br/>";
     echo "$calificacion<br/>";
     echo "$pagoinscri<br/>";
     echo "$pagoprueb<br/>";
     echo "$status<br/>";
     echo "$apoyo<br/>";
     echo "$apoyo2<br/>";
     echo "$alergias<br/>";
     echo "$tiposangre<br/>";
     echo "$discapacidad<br/>";
     echo "$hermanas<br/>";
     echo "$numdeher<br/>";
     echo "$nesecidadesesp<br/>";
     echo "$nesespcua<br/>";*/
     

    require("conexion.php");
        mysqli_select_db($conn, "schoolDB");
        $tildes =$conn->query("SET NAMES 'utf8'");
      
        $query=mysqli_query($conn,"INSERT INTO `schoolDB`.`estudiante`(`id`, `nombre`, `apeidos`, `edad`, `sexo`, `fechanac`, `CURP`, `matricula`, `telefono`, `tutor`, `NombreT`, `apeidost`, `domicilio`, `Localidad`, `municipio`, `entfed`, `grado`, `grupo`,     `pagoinscri`, `pagoprueb`, `status` ,`apoyo`, `apoyo2`, `alergias`, `tiposangre`, `discapacidad`, `hermanas`, `numdeher`,`nesecidadesesp`,`nesespcua`) 


          VALUES(NULL, '$nombre', '$apeidos', '$edad', '$sexo', '$fechanac', '$CURP', '$matricula', '$telefono', '$tutor', '$NombreT', '$apeidost','$domicilio', '$Localidad', '$municipio', '$entfed', '$grado', '$grupo', '$pagoinscri', '$pagoprueb','$status', '$apoyo', '$apoyo2', '$alergias','$tiposangre','$discapacidad','$hermanas', '$numdeher', '$nesecidadesesp', '$nesespcua')"); 
        
        if (!$query) {
            die("Invalid query: " . mysqli_error($conn));
                }else{ 
         

             echo ' <script language="javascript">alert("Alumno Registrado Satisfactoriamente");</script> ';
             //echo `Se ha registrado con exito`;
             echo "<script>location.href='ListAlumno.php'</script>";   
               echo "Success"; 
           } 
               mysqli_close($conn);
            
            
?>  



