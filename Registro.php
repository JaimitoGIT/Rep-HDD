<?php
    include("Php/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM usuarios";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);

	session_start();
    $_SESSION['code']=0;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Datazuma</title>
        <audio src="Resources/shuuya goenji.mp3" autoplay loop></audio>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="registro.css">
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
								echo "No hay una sesion iniciada";
							}
						?>
					</div>
                </div>
            </nav>
        </header>

        <main>
            <!-- Modal -->
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
                            <a href="recuperacion.php" class="btn btn-secondary" tabindex="-1" role="button"                   >Recuperar Contraseña </a>
							<button type="submit" class="btn btn-primary"                              >Iniciar Sesión </button>
							<a href="Registro.php" class="btn btn-primary" tabindex="-1" role="button" >Registro       </a>
						</div>
					</form>	
				</div>
				</div>
			</div>
            <img class="scroll-image" src="Resources/banner 42.jpeg">
            <?php
                if (isset($_GET['error']) && $_GET['error'] == 'usuario_existente') {
                    echo "<div class='alert alert-danger' role='alert'>El nombre de usuario ya existe. Por favor, elige otro.</div>";
                }
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col"></div>

                    <div class="col">
                        <div class="bigbox1">
                            <form action="Php/insertar.php" method="post">
                                <div class="mb-3"><label for="iname"     class="form-label">Nombre</label>              <input type="text"     class="form-control"     id="iname"     name="nombre" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Solo se pueden letras" required>     </div>
                                <div class="mb-3"><label for="isurname"  class="form-label">Apellido</label>            <input type="text"     class="form-control"     id="isurname"  name="apellido" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Solo se pueden letras" required>   </div>
                                <div class="mb-3"><label for="iuser"     class="form-label">Nombre de Usuario</label>   <input type="text"     class="form-control"     id="iuser"     name="usuario" required>    </div>
                                <div class="mb-3"><label for="ipassword" class="form-label">Contraseña</label>          <input type="password" class="form-control"     id="ipassword" name="contraseña" required> </div>
                                <div class="mb-3"><label for="imail"     class="email">Correo</label>                   <input type="text"     class="form-control"     id="imail"     name="correo" required>     </div>
                                <div class="mb-3"><label for="idate"     class="form-label">Fecha de Nacimiento</label> <input type="date"     class="form-control"     id="idate"     name="nacimiento" required> </div>
                                <div class="mb-3">
                                    <select class="form-select" aria-label="isex" name="sexo" required>
                                        <option selected>Sexo</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="femenino">Femenino</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </main>
        
        <footer>
            <div class="fila">
                <img src="Resources/Neo_Japan_emblem.webp">
                <div class="boxtext"><h2>Contactanos a travez de:</h2></div>
            </div>
            <div class="objeto-ft"><a href="https://chat.whatsapp.com/Ensv97j866bGglSIs1e888"><img src="Resources/wsp icon.png" target="_blank"></a> </div>
            <div class="objeto-ft"><a href="https://www.instagram.com/matias_aguilera_cuevas?igsh=N2hmeGo0MzJ5emYy"><img src="Resources/87390.png" target="_blank"></a></div>
            <div class="objeto-ft"><a href="https://www.facebook.com/"><img src="Resources/f.png" target="_blank"></a>
        </footer>
    </body>
</html>