<?php
    include("conexion.php");
    $con=conectar();

    $usuario=$_POST['usuario'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
    $nacimiento=$_POST['nacimiento'];
    $sexo=$_POST['sexo'];

    $sql="INSERT INTO usuarios VALUES('$usuario','$nombre','$apellido','$correo','$contraseña','$nacimiento','$sexo')";
    $query= mysqli_query($con,$sql);

    if(Header("Location: ../Registro.php")){
        if($query){
            Header("Location: ../Registro.php");
        }else{
        }
    }else{
    }
    if(Header("Location: ../panel.php")){
        if($query){
            Header("Location: ../panel.php");
        }else{
        }
    }
    
?>