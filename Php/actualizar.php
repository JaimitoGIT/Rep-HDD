<?php
    include("conexion.php");
    $con=conectar();

    $user=$_GET['usuario'];

    $sql="SELECT * FROM `usuarios` WHERE usuario='$user'";
    $query=mysqli_query($con,$sql); 

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Datazuma</title>
        <audio src="Resources/shuuya goenji.mp3" autoplay loop></audio>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="panel.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <form action="update.php" method="post">
            <div class="bigbox1">
                <div class="mb-3"><label for="iname" class="form-label">Nombre</label><input type="text" class="form-control" id="iname" name="nombre" value="<?php echo $row['nombre'] ?>"> </div>
                <div class="mb-3"><label for="isurname" class="form-label">Apellido</label><input type="text" class="form-control" id="isurname" name="apellido" value="<?php echo $row['apellido'] ?>"> </div>
                <div class="mb-3"><label for="iuser" class="form-label">Nombre de Usuario</label><input type="text" class="form-control" id="iuser" name="usuario" value="<?php echo $row['usuario'] ?>"> </div>
                <div class="mb-3"><label for="ipassword" class="form-label">Contraseña</label><input type="password" class="form-control" id="ipassword" name="contraseña" value="<?php echo $row['contraseña'] ?>"> </div>
                <div class="mb-3"><label for="imail" class="email">Correo</label><input type="text" class="form-control" id="imail" name="correo" value="<?php echo $row['correo'] ?>"> </div>
                <div class="mb-3"><label for="idate" class="form-label">Fecha de Nacimiento</label><input type="date" class="form-control" id="idate" name="nacimiento" value="<?php echo $row['nacimiento'] ?>"> </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="isex" name="sexo">
                        <option value="masculino" <?php if ($row['sexo'] == 'masculino') echo 'selected'; ?>>Masculino</option>
                        <option value="femenino" <?php if ($row['sexo'] == 'femenino') echo 'selected'; ?>>Femenino</option>
                        <option value="otro" <?php if ($row['sexo'] == 'otro') echo 'selected'; ?>>Otro</option>
                    </select>
                </div>
                <!-- Campo oculto para el usuario original -->
                <input type="hidden" name="usuario_original" value="<?php echo $row['usuario'] ?>">
                <a href="../panel.php" class="btn btn-secondary">Salir</a>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>	
    </body>
</html>
