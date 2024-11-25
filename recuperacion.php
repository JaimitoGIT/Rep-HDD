<?php
    include("Php/conexion.php");
    
    $con=conectar();
    session_start();
    
    $_SESSION['valid']=0;
    if($_SESSION['code']!=0){
        $_SESSION['valid']=1;
    }

    if (isset($_POST['cerrar_sesion'])) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: recuperacion.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datazuma</title>
        <audio src="Resources/ooth.mp3" autoplay loop></audio>
        <link rel="stylesheet" href="inicial.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <?php   
            if($_SESSION['valid']==0){
                echo '<form action="codigo.php" method="POST">';
                    echo' <div class="mb-3"><label for="iuser" class="form-label">Nombre de Usuario</label>   <input type="text"     class="form-control" name="usuario" required>    </div>';
                    echo' <div class="mb-3"><label for="imail" class="email">Correo</label>                   <input type="text"     class="form-control" name="correo"  required>    </div>';
                    echo' <button type="submit" class="btn btn-primary">Buscar</button>';
                echo '</form>';
            }
            if($_SESSION['valid']==1){
                echo '<form action="cambiar.php" method="POST">';
                    echo'<label for="ipassword" class="form-label">Nueva Contraseña</label><input type="password" class="form-control" name="contraseña"> ';
                    echo' <button type="submit" class="btn btn-primary">Actualizar</button>';
                echo '</form>';
                echo '<form action="" method="POST">';
                    echo '<button type="submit" name="cerrar_sesion" class="btn btn-danger">Volver</button>';
                echo '</form>';
            }
        ?>
    </body>
</html>