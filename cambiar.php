<?php
    include("Php/conexion.php");
    $con=conectar();
    session_start();

    $usuario = $_SESSION['us'];

    $contraseña = $_POST['contraseña'];

    $sql = "UPDATE `usuarios` SET contraseña='$contraseña'WHERE usuario='$usuario'";   

    $query = mysqli_query($con, $sql); 

    if ($query) {
        session_unset();
        session_destroy();
        session_start();
        $_SESSION['code']=0;
        header("Location: recuperacion.php");
    }
?>  