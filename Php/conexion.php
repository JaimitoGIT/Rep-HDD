<?php
    function conectar(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "pagina";
        $conexion = new mysqli($server,$user,$pass,$db);
        if ($conexion->connect_errno) {
            die("La conexion ha fallado" . $conexion->connect_errno);
        }
        return $conexion;
    }
?>