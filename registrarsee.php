<?php
require "database.php";
if(isset($_REQUEST['fname'])){
        if($_POST['fname'] && $_POST['lname'] && $_POST['email'] && $_POST['password']){
                $fname=stripslashes($_POST['fname']);
                $lname=stripslashes($_POST['lname']);
                $email=stripslashes($_POST['email']);
                $password=stripslashes($_POST['password']);
                
                $sql="INSERT INTO users (nombre,apellido,correo,contrasena) VALUES ('$fname','$lname','$email','$password')";
                $exec=mysqli_query($con,$sql);
                if($exec){
                        header("location: index.php");
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
    <title>Document</title>
    <link rel="stylesheet" href="csss/reg.css">
</head>
<body>
        <div class="container">
           
                <div class="form">
        <h2>Registrarse</h2>
        <form action="" method="POST">
                <div class="inputBox">
                        <input type="text" name="fname" id="fname"
                        placeholder="First Name">
                        </div>
                        <div class="inputBox">
                                <input type="text" name="lname" id="lname"
                                placeholder="Last Name">
                                </div>
        
        <div class="inputBox">
        <input type="email" name="email" id="email"
        placeholder="Email">
        </div>
        
        <div class="inputBox">
                <input type="password" name="password" id="password"
                placeholder="Password">
                </div>
                <div class="inputBox">
                        <input type="submit" name=""
                        value="Ingresar">
                       
                </div>
        </form>
                </div>
                </div>
            </div>
</body>
</html>