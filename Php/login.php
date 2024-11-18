<?php
    include("conexion.php");
    $con=conectar();

    $user=$_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $sql_check = "SELECT * FROM usuarios WHERE usuario = '$user' AND contraseña = '$contraseña' ";
    $query_check = mysqli_query($con, $sql_check);
    
    session_start();
    session_unset();
    session_destroy();

    if (mysqli_num_rows($query_check) == 0) {
        Header("Location: ../index.php?error=usuario_o_contraseña_erroneo");
        exit();
    }
    else{
        session_start();
        $_SESSION["usuario"]= "$user";
        Header("Location: ../index.php");
    }
?>