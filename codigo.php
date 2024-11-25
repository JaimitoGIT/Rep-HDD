<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    require 'vendor/autoload.php';

    include("Php/conexion.php");
    srand(time());
    $con=conectar();
    srand(time());
    session_start();

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $_SESSION['us']=$usuario;
    $_SESSION['ma']=$correo;

    $sql="SELECT * FROM `usuarios` WHERE usuario='$usuario' AND correo='$correo'";
    $query1=mysqli_query($con,$sql);

    if (isset($_POST['cerrar_sesion'])) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: recuperacion.php");
        exit();
    }

    if (mysqli_num_rows($query1) > 0) {
        $_SESSION['code'] = rand(1000, 9999); 
        $codigo = $_SESSION['code'];
        $mail = new PHPMailer(true);
    
        try {
            // Configurar servidor SMTP de Gmail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'kaydxx@gmail.com';
            $mail->Password = 'yizb gdpv upfd gzjj';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->CharSet = 'UTF-8';
    
            // Configurar los datos del correo
            $mail->setFrom('kaydxx@gmail.com', 'Datazuma');
            $mail->addAddress($correo, $usuario); // Destinatario
            $mail->Subject = 'Código de Recuperación de Contraseña Datazuma';
            $mail->Body    = "Hola $usuario, tu código de recuperación es: $codigo";
    
            // Enviar el correo
            $mail->send();
            echo 'Correo de recuperación enviado a ' . $correo;
        } catch (Exception $e) {
            echo "Error al enviar el correo: {$mail->ErrorInfo}";
        }
    } else {
        session_start();
        session_unset();
        session_destroy();
        Header("Location: recuperacion.php");
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
        <form action="comprobar.php" method="post">
            <label for="iuser" class="form-label">Codigo de Verificación</label>   <input type="text" class="form-control" name="codigo2" required>
            <button type="submit" class="btn btn-primary">Comprobar</button>
        </form>
        <form action="" method="POST">
            <button type="submit" name="cerrar_sesion" class="btn btn-danger">Volver</button>
        </form>



    </body>
</html>