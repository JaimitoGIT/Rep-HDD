<?php
    include("conexion.php");
    $con=conectar();

    $user=$_GET['usuario'];
    
    $sql="DELETE FROM `usuarios` WHERE usuario='$user'";
    $query=mysqli_query($con,$sql);
    
    if($query){
        Header("Location: ../panel.php");
    }else{
    }

?>