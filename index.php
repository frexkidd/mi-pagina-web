<?php
require "database.php";

if(isset($_POST['email'])){

    
    if( $_POST['email'] && $_POST['password']){
            $email=stripslashes($_POST['email']);
            $email = mysqli_real_escape_string($con, $email);
            $password=stripslashes($_POST['password']);
            $password = mysqli_real_escape_string($con, $password);
            
            $sql="SELECT * FROM users WHERE correo='$email' AND contrasena='$password'";
            $exec=mysqli_query($con,$sql);
            $rows = mysqli_num_rows($exec);
            if($rows == 1){
                header("location: MundoOtaku.php");
            }else if($rows==0){
                echo('<script>alert("USUARIO NO REGISTRADO")</script>');
            }
            
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="csss/styleeee.css">
    
</head>
<body>
    <div class="container">
           
        <div class="form">
<h2>Iniciar Sesión</h2>
<form action="" method="POST">

<div class="inputBox">
<input type="email" name="email" id="email"
placeholder="Email">
</div>

<div class="inputBox">
        <input type="password" name="password" id="password"placeholder="Password">
            </div>
                <div class="inputBox">
                    <input type="submit" class="boton" name=""value="Ingresar">     

                	    <a class="boton_personalizado" href="registrarsee.php">Registrarse</a>
                </div>
                        </p class="p">No tienes Cuenta?</p>
                
               
        </div>
</form>
        </div>
        </div>
    </div>
</body>
</html>