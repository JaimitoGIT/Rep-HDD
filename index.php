<?php
	session_start();
	$_SESSION['code']=0;
	$_SESSION['mensaje']=0;
?>

<!DOCTYPE html>
<html>
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
        <!-- Este es un comentario en HTML -->
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
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"                            >Salir                </button>
							<a href="recuperacion.php" class="btn btn-secondary" tabindex="-1" role="button"                   >Recuperar Contraseña </a>
							<button type="submit" class="btn btn-primary"                                                      >Iniciar Sesión </button>
							<a href="Registro.php" class="btn btn-primary" tabindex="-1" role="button"                         >Registro             </a>
						</div>
					</form>	
				</div>
				</div>
			</div>

            <img class="scroll-image" src="Resources/banner v2.jpeg">
			<div class="container">
				<?php 
					if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'exito') {
						echo "<div class='alert alert-success' role='alert'>¡Inicio de sesión exitoso!</div>";
					}

					if (isset($_GET['error']) && $_GET['error'] == 'usuario_o_contraseña_erroneo') {
						echo "<div class='alert alert-danger' role='alert'>Usuario o contraseña incorrectos. Intenta de nuevo.</div>";
					}
				?>
			</div>
			<div class="box_a">
				<div class="objeto-main"><img src="Resources/arion.png"></div>
				<div class="boxtext f"><h1> ¡Bienvenidos a Datazuma!</h1><h2>Esto es Datazuma, tu página de confianza, donde puedes obtener información sobre todo lo relacionado a inazuma eleven y su franquicia de videojuegos.</h2></div>
			</div>
            <!-- Este es un comentario en HTML -->
            <div class="container-fluid m">
                <div class="row">
                    <div class="col">
                        <div class="lbox1">
                            <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  	<div class="carousel-item active" data-bs-interval="5000">
                                    	<img src="Resources/gif1.webp">
									</div>
                                	<div class="carousel-item">
                                    	<img src="Resources/gif2.webp" data-bs-interval="5000">
                                  	</div>
                                	<div class="carousel-item">
                                    	<img src="Resources/gif3.webp" data-bs-interval="5000">
                                	</div>
                                	<div class="carousel-item">
                                		<img src="Resources/gif4.gif" data-bs-interval="5000">
                                  	</div>
                                  	<div class="carousel-item">
                                    	<img src="Resources/gif5.gif" data-bs-interval="5000">
                                  	</div>
                                  	<div class="carousel-item">
                                    	<img src="Resources/gif6.gif" data-bs-interval="5000">
                                  	</div>
                                  	<div class="carousel-item">
                                    	<img src="Resources/gif7.gif" data-bs-interval="5000">
                                  	</div>
                                  	<div class="carousel-item">
                                    	<img src="Resources/gif8.gif" data-bs-interval="5000">
                                  	</div>
                                  	<div class="carousel-item">
                                    	<img src="Resources/gif9.gif" data-bs-interval="5000">
                                  	</div>
                                  	<div class="carousel-item">
                                    	<img src="Resources/gif10.gif" data-bs-interval="5000">
                                  	</div>
                                  	<div class="carousel-item">
                                    	<img src="Resources/gif11.gif" data-bs-interval="5000">
                                  	</div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                                	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  	<span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                                  	<span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  	<span class="visually-hidden">Next</span>
                                </button>
								<div class="boxtext b"><h1>Listas de Supertécnicas</h1><h4>Las técnicas en Inazuma Eleven son ataques espectaculares que cada jugador ejecuta en el campo. Son la esencia del dinamismo y la estrategia en la serie, resaltando tanto la fuerza individual como el trabajo en equipo.</h4></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lbox2">
                            <table class="table">
                                <thead>
                                	<tr>
                                    	<th scope="col">#</th>
                                    	<th class="wide-text" colspan="2">VideoJuegos</th>
                                    	<th scope="col"></th>
                                    	<th scope="col">LOGOS</th>
                                    	<th scope="col"></th>
                                	</tr>
                                </thead>
                                <tbody>
                                	<tr>
                                    	<th scope="row">1</th>
                                    	<td class="wide-text" colspan="2">Inazuma Eleven</td>
										<td></td>
                                    	<td><img src="Resources/Logo_Inazuma_Eleven.webp"></td>
                                    	<td></td>
                                	</tr>
                                	<tr>
                                    	<th scope="row">2</th>
                                    	<td class="wide-text" colspan="2">Inazuma Eleven 2</td>
                                    	<td><img src="Resources/titulo 2.png"></td>
                                    	<td></td>
                                    	<td><img src="Resources/titulo 2alt.png"></td>
                                	</tr>
                                	<tr>
                                		<th scope="row">3</th>
                                    	<td colspan="2">Inazuma Eleven 3</td>
                                    	<td><img src="Resources/titulo 3.webp"></td>
                                    	<td><img src="Resources/titulo 3alt2.png"></td>
                                    	<td><img src="Resources/titulo 3alt.webp"></td>
                                	</tr>
                            		<tr>
                                    	<th scope="row">4</th>
                                    	<td colspan="2">Inazuma Eleven GO</td>
                                    	<td><img src="Resources/IE_GO_Luz_Logo.webp"></td>
                                    	<td></td>
                                    	<td><img src="Resources/IE_GO_Sombra_Logo.webp"></td>
                                	</tr>
                                	<tr>
                                    	<th scope="row">5</th>
                                    	<td colspan="2">Inazuma Eleven GO Chrono Stones</td>
                                    	<td><img src="Resources/IE_GO_CS_Llamarada.webp"></td>
                                    	<td></td>
                                    	<td><img src="Resources/IE_GO_CS_Trueno.webp"></td>
                                	</tr>
                                	<tr>
                                    	<th scope="row">6</th>
                                    	<td colspan="2">Inazuma Eleven GO Galaxy</td>
                                    	<td><img src="Resources/galaxy logo1.png"></td>
                                    	<td></td>
                                    	<td><img src="Resources/galaxy logo2.png"></td>
                                	</tr>
                                </tbody>
                            </table>
                        </div> 	
                    </div>
                </div>
            </div>
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<div class="card">
							<img src="Resources/ilustracion riccardo.png" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Los Espíritus Guerreros son poderosas entidades que los jugadores pueden invocar para potenciar sus habilidades en el campo de fútbol. Cada Espíritu Guerrero tiene una apariencia única y representa distintas fuerzas o personalidades, como dragones, caballeros, bestias míticas y otros seres legendarios. Entre los más famosos están Majin Pegasus Arc, Lancelot, Big, y Amaterasu, que reflejan el espíritu de lucha característico de la serie.</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="Resources/estadio2.jpeg" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Los Estadios de Inazuma Eleven son espacios emblemáticos donde se desarrollan intensos partidos de fútbol. Cada uno tiene su propia estética y características únicas, reflejando la cultura y el estilo de la región en la que se encuentra. Desde el majestuoso Estadio Raimon, hasta el imponente Estadio Ogro, donde se disputan los partidos más importantes, estos lugares son el escenario de grandes desafíos y rivalidades.</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="boxtext c">
							<h1> Protagonista</h1>
              				<h1> de cada temporada</h1>
						</div>
						<div id="carousel2" class="carousel slide">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
							</div>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="Resources/Endou_Mamoru_29.webp" class="d-block w-100">
									<div class="carousel-caption d-none d-md-block">
										<h3>Mark Evans</h3>
										<h3>Inazuma Eleven 1,2,3</h3>
									</div>
								</div>
								<div class="carousel-item">
									<img src="Resources/arionb.jpg" class="d-block w-100">
									<div class="carousel-caption d-none d-md-block">
										<h3>Arion Sherwind</h3>
										<h3>Inazuma Eleven GO, Chrono Stones, Galaxy</h3>
									</div>
								</div>
								<div class="carousel-item">
									<img src="Resources/sunny.webp" class="d-block w-100">
									<div class="carousel-caption d-none d-md-block">
										<h3>Sunny Wright</h3>
										<h3>Inazuma Eleven Ares/Orion</h3>
									</div>
							  	</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<img class="footerimg" src="Resources/F6Zv1s4XoAAiE6D.jpg">    
        </main>
        <!-- Este es un comentario en HTML -->
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