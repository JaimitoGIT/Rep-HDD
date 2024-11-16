<?php
    function conectar(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "pagina";
        
        $con=mysqli_connect($server,$user,$pass);

        mysqli_select_db($con,$db);

        return $con;
    }
?>