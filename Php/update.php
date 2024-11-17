<?php
    include("conexion.php");
    $con=conectar();

    $usuario = $_POST['usuario'];
    $usuario_original = $_POST['usuario_original'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $nacimiento = $_POST['nacimiento'];
    $sexo = $_POST['sexo'];

    if ($usuario != $usuario_original) {
        $sql = "UPDATE `usuarios` SET usuario='$usuario', nombre='$nombre', apellido='$apellido', correo='$correo', contraseña='$contraseña', nacimiento='$nacimiento', sexo='$sexo' WHERE usuario='$usuario_original'";   
    } else {
        $sql = "UPDATE `usuarios` SET nombre='$nombre', apellido='$apellido', correo='$correo', contraseña='$contraseña', nacimiento='$nacimiento', sexo='$sexo' WHERE usuario='$usuario_original'";   
    }

    $query = mysqli_query($con, $sql); 

    if ($query) {
        header("Location: ../panel.php");
    }
?>  