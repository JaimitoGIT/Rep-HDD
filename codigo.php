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
        session_start();
        $_SESSION['code']=0;
        $_SESSION['mensaje']=0;
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
        } catch (Exception $e) {
            echo "Error al enviar el correo: {$mail->ErrorInfo}";
        }
    } else {
        session_start();
        session_unset();
        session_destroy();
        session_start();
        $_SESSION['code']=0;
        $_SESSION['mensaje']=3;
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
        <link rel="stylesheet" href="recuperacion.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <header>
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="p-4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="fila">
                                    <div class="objeto-nav b"><img src="Resources/datazuma.png"></div>
                                </div>
                            </div>
                            <div class="col">
								<div> 
									<?php 
										if (isset($_SESSION["usuario"])){
											echo'<a href="Php/logout.php"><img class="objeto-nav c " style="height: 60px;"  src="Resources/cerrar.png"></a>';
										}
									?>
								</div>
								
							</div>
                            <div class="col">
                                <div class="fila">
                                    <div class="objeto-nav c"><a href="index.php"><img src="Resources/Inicio.png"></a></div>
                                    <div class="objeto-nav c"><a href="Nosotros.php"><img src="Resources/nosotros.png"></a></div>
                                    <div class="objeto-nav c"><a data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="Resources/login.png"></a></div>
									<div class="objeto-nav c"><a href="panel.php"><img src="Resources/panel2.png"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar">
                <div class="container-fluid">
                    <a href="#navbarToggleExternalContent" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img  src="Resources/titulo.png" alt="Toggle navigation">
                    </a>	
					<div> 
						<?php 
							if (isset($_SESSION["usuario"])){
								echo $_SESSION['usuario'];
							}
							else{
								echo "No hay una Sesión Iniciada";
							}
						?>
					</div>
                </div>
            </nav>
        </header>
        <img class="scroll-image3" src="Resources/recup.png">
        <!-- Modal login -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<img src="Resources/inicio sesion title.png">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="Php/login.php" method="post" >
						<div class="modal-body">					
							<div class="mb-3 w-50">
								<label for="iuser"     class="form-label"><strong>Nombre de Usuario</strong></label>
								<input type="text"     class="form-control"     id="iuser"     name="usuario"    required>
							</div>
							<div class="mb-3 w-50">
								<label for="ipassword" class="form-label"><strong>Contraseña</strong></label>
								<input type="password" class="form-control"     id="ipassword" name="contraseña" required>
							</div>
							<div class="mb-3 form-check">
								  <input type="checkbox" class="form-check-input" id="exampleCheck1">
								  <label class="form-check-label" for="exampleCheck1"><strong>Recuerdame</strong></label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"    >Salir          </button>
                            <a href="recuperacion.php" class="btn btn-secondary" tabindex="-1" role="button">Recuperar Contraseña </a>
							<button type="submit" class="btn btn-primary"                              >Iniciar Sesión </button>
							<a href="Registro.php" class="btn btn-primary" tabindex="-1" role="button" >Registro       </a>
						</div>
					</form>	
				</div>
				</div>
			</div>
        <div class="box_b">
            <form action="comprobar.php" method="post">
                <label for="iuser" class="form-label">Codigo de Verificación</label>   <input type="text" class="form-control" name="codigo2" required>
                <button type="submit" class="btn btn-primary">Comprobar</button>
            </form>
            <form action="" method="POST">
                <button type="submit" name="cerrar_sesion" class="btn btn-danger">Volver</button>
            </form>
        </div>
    </body>
</html>