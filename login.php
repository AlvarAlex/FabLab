<?php
    session_start();
    include("conexion.php");   
    $usuario = $_POST['user'];
    $password =$_POST['pass'];
    $sql ="SELECT * FROM usuarios WHERE user= '$usuario'" AND "pass = '$password'";

    $resultado = mysqli_query($conexion,$sql);

    while($row = mysqli_fetch_array($resultado)) {
        $usuario= $row['user'];
        $password= $row['password'];
        $rol= $row['rol'];
    }
  
    if($resultado->num_rows>0){
        $_SESSION['usuario']= $usuario;
        $_SESSION['rol']= $rol;
        header('Location: panel.php');
    }else{
        echo "Usuario o contraseña incorrectos  ";
    }
        
    ?>