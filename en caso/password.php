<?php
    include("Php/conexion.php");
    srand(time());
    $con=conectar();
    session_start();
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];

    $sql="SELECT * FROM `usuarios` WHERE usuario='$usuario' AND correo='$correo'";
    $query1=mysqli_query($con,$sql);
    
    if($query1){
        $codigo= rand(1000,9999);
        
        mail("$correo","Codigo Recuperación Contraseña Datazuma","Codigo de Recuperación: $codigo");
    }else{
        Header("Location: ../recuperacion.php");
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
        <img class="scroll-image" src="Resources/recup.png">
        <div class="box_a">
            <form action="password.php">
                <div class="mb-3"><label for="iuser"     class="form-label">Nombre de Usuario</label>   <input type="text"     class="form-control"     id="iuser"     name="usuario" required>    </div>
                <div class="mb-3"><label for="imail"     class="email">Correo</label>                   <input type="text"     class="form-control"     id="imail"     name="correo" required>     </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Recuperar</button>
                </div>              
            </form>
        </div>
        




    </body>
</html>