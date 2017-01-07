 <?php
  session_start();
     require("conexion.php");
      
      $user = $_POST['user'];
      $password = $_POST['password'];

      $sql2=mysqli_query($conn,"SELECT * FROM credenciales WHERE usuario='$user'");
      $temp=mysqli_num_rows($sql2);
      if(0==$temp){
       // echo "no record";
        exit;
      }else{
      if($f2=mysqli_fetch_assoc($sql2)){
         if($password==$f2['passwordAdmin']){
            $_SESSION['id']=$f2['id'];
            $_SESSION['usuario']=$f2['usuario'];
            
               echo '<script>alert("WELCOME")</script> ';
            echo "<script>location.href='menu.php'</script>";
         

         }
       }
      }


      $sql=mysqli_query($conn,"SELECT * FROM credenciales WHERE usuario='$user'");
      if($f=mysqli_fetch_assoc($sql)){
         if($password==$f['password']){
            $_SESSION['id']=$f['id'];
            $_SESSION['usuario']=$f['usuario'];
            

            echo '<script>alert("Bienbenido")</script> ';
            echo "<script>location.href='menu2.php'</script>";

                }else{
            echo '<script>alert("Contraseña Incorrecta")</script> ';

         
            echo "<script>location.href='index.php'</script>";
            }

           }

          else{
         
         echo '<script>alert("Usuario no existe")</script> ';
         
         echo "<script>location.href='index.php'</script>"; 

         }

?>