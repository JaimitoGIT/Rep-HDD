<?php
    include("Php/conexion.php");
    
    session_start();

    $codigo= $_POST['codigo2'];
    if($_SESSION['code']==$codigo){
        $_SESSION['valid']=1;
        Header("Location: recuperacion.php");
    }
    else {
        session_unset();
        session_destroy();
        session_start();
        $_SESSION['code']=0;
        echo "Codigo Erroneo Vuelva a intentarlo";
        Header("Location: recuperacion.php");
    }
    

?>