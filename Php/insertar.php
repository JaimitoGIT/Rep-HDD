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

    // Verificar si el usuario ya existe
    $sql_check = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $query_check = mysqli_query($con, $sql_check);

    if (mysqli_num_rows($query_check) > 0) {
        // Redirigir al formulario con un mensaje de error si el usuario ya existe
        Header("Location: ../Registro.php?error=usuario_existente");
        exit();
    }

    // Intentar insertar el nuevo usuario si no existe
    $sql_insert = "INSERT INTO usuarios VALUES('$usuario','$nombre','$apellido','$correo','$contraseña','$nacimiento','$sexo')";
    $query_insert = mysqli_query($con, $sql_insert);

    if ($query_insert) {
        // Si el registro es exitoso, redirigir al panel de usuario
        Header("Location: ../Registro.php?success=usuario_creado");
    } else {
        // Si hay un error, redirigir al formulario con un mensaje de error
        Header("Location: ../Registro.php?error=error_registro");
    }

    
?>