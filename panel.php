<?php
    include("Php/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM usuarios";
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
                            <div class="col"></div>
                            <div class="col">
                                <div class="fila">
                                    <div class="objeto-nav c"><a href="index.html"><img src="Resources/Inicio.png"></a></div>
                                    <div class="objeto-nav c"><a href="Nosotros.html"><img src="Resources/nosotros.png"></a></div>
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
                </div>
            </nav>
        </header>
    <body>
        <!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<img src="Resources/inicio sesion title.png">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form>
						<div class="modal-body">					
							<div class="mb-3 w-50">
								<label for="imail" class="form-label"><strong>Dirección de Correo</strong></label>
								<input type="email" class="form-control" id="imail" aria-describedby="emailHelp">
								<div id="emailHelp" class="form-text">No compartiremos tu correo con nadie.</div>
							</div>
							<div class="mb-3 w-50">
								<label for="ipassword" class="form-label"><strong>Contraseña</strong></label>
								  <input type="password" class="form-control" id="ipassword">
							</div>
							<div class="mb-3 form-check">
								  <input type="checkbox" class="form-check-input" id="exampleCheck1">
								  <label class="form-check-label" for="exampleCheck1"><strong>Recuerdame</strong></label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
							<button type="submit" class="btn btn-primary">Iniciar Sesión</button>
							<a href="Registro.php" class="btn btn-primary" tabindex="-1" role="button">Registro</a>
						</div>
					</form>	
				</div>
				</div>
			</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <img class="scroll-image2" src="Resources/banner 5.jpeg">
        <!-- tablas y cosas -->
        <div class="box_panel">
            <img src="Resources/panel-add.png">
        </div>
        <div class="col-xl">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>Id        </th>
                        <th>Usuario   </th>
                        <th>Nombre    </th>
                        <th>Apellido  </th>
                        <th>Correo    </th>
                        <th>Contraseña</th>
                        <th>Nacimiento</th>
                        <th>Sexo      </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=mysqli_fetch_array($query)){
                    ?>  
                        <tr>
                            <th> <?php echo $row['id']         ?></th>
                            <th> <?php echo $row['usuario']    ?></th>
                            <th> <?php echo $row['nombre']     ?></th>
                            <th> <?php echo $row['apellido']   ?></th> 
                            <th> <?php echo $row['correo']     ?></th>
                            <th> <?php echo $row['contraseña'] ?></th>
                            <th> <?php echo $row['nacimiento'] ?></th>
                            <th> <?php echo $row['sexo']       ?></th>
                            <th> <a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">editar</a> </th>
                            <th> <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">eliminar</a> </th>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        






    </body>
</html>