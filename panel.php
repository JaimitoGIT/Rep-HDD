<?php
    include("Php/conexion.php");
    $con = conectar();

    $usuario_buscado = isset($_GET['usuario_buscado']) ? $_GET['usuario_buscado'] : '';

    if (!empty($usuario_buscado)) {
        $sql = "SELECT * FROM usuarios WHERE usuario LIKE '%$usuario_buscado%'";
    } else {
        $sql = "SELECT * FROM usuarios";
    }

    $query = mysqli_query($con, $sql);

	session_start();
    $_SESSION['code']=0;
    $_SESSION['mensaje']=0;
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
                            <div class="col"></div>
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
    <body>
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
        <!-- Modal añadir -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<img src="Resources/añadir usuario title.png">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="Php/insertar.php" method="post">
						<div class="modal-body">
                            <div class="bigbox1">
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
                            </div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                            <button type="submit" class="btn btn-primary">guardar</button>
						</div>
					</form>	
				</div>
				</div>
			</div>
        
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <img class="scroll-image2" src="Resources/banner 5.jpeg">
        <!-- tablas y cosas -->
        <div class="box_panel">
            <a data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="Resources/panel-add.png"></a>
            <div>
                <form method="GET" action="">
                    <input input type="image" src="Resources/panel-search.png" style="height: 100px">
                    <input type="text" class="form-control" id="iuser" name="usuario_buscado" placeholder="Nombre de Usuario">
                </form>
            </div>
        </div>

            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>Usuario   </th>
                        <th>Nombre    </th>
                        <th>Apellido  </th>
                        <th>Correo    </th>
                        <th>Contraseña</th>
                        <th>Nacimiento</th>
                        <th>Sexo      </th>
                        <th>Comandos  </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=mysqli_fetch_array($query)){
                    ?>  
                        <tr>
                            <th> <?php echo $row['usuario']    ?></th>
                            <th> <?php echo $row['nombre']     ?></th>
                            <th> <?php echo $row['apellido']   ?></th> 
                            <th> <?php echo $row['correo']     ?></th>
                            <th> <?php echo $row['contraseña'] ?></th>
                            <th> <?php echo $row['nacimiento'] ?></th>
                            <th> <?php echo $row['sexo']       ?></th>
                            <th> <a href="actualizar.php?usuario=<?php echo $row['usuario'] ?>" class="btn btn-info">Editar       </a> </th>
                            <th> <a data-bs-toggle="modal" data-bs-target="#mod3" class="btn btn-danger" > Eliminar      </a>          </th>
                            
                            <!-- Modal confirm -->
                            <div class="modal fade" id="mod3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				                <div class="modal-dialog">
				                    <div class="modal-content">
					                    <div class="modal-header">
                                            <img src="Resources/confirmar-eliminacion.png">
					                    </div>
					                    <div class="modal-body">					
                                            <img src="Resources/texto.png">
					                    </div>
					                    <div class="modal-footer">
						                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                                            <a href="Php/eliminar.php?usuario=<?php echo $row['usuario'] ?>" class="btn btn-danger">Confirmar</a>
					                    </div>
				                    </div>
				                </div>
			                </div>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
    </body>
</html>