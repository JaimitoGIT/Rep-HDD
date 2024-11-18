<?php
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Datazuma</title>
        <audio src="Resources/ooth.mp3" autoplay loop></audio>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="nosotros.css">
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
							<button type="submit" class="btn btn-primary"                              >Iniciar Sesión </button>
							<a href="Registro.php" class="btn btn-primary" tabindex="-1" role="button" >Registro       </a>
						</div>
					</form>	
				</div>
				</div>
			</div>
            <img class="scroll-image" src="Resources/banner 3.jpeg">
            <div class="box_a">
                <div class="objeto-main"><img src="Resources/illustracion mark.png"></div>
				<div class="boxtext g"><h1> ¡Conocenos!</h1><h2>Bienvenidos a DataZuma Inazuma Eleven Foro, el destino definitivo para todos los fans del emocionante mundo de Inazuma Eleven. Nuestra comunidad está dedicada a brindar la información más completa, precisa y actualizada sobre esta saga de juegos, anime y manga que ha capturado los corazones de tantos alrededor del mundo.</h2></div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="lbox1">
                            <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="5000">
                                        <img src="Resources/icono erin.webp" class="rounded mx-auto d-block">
                                        <div class="position-relative text-center">
                                            <h5>Unetenos</h5>
                                            <p>¡Siempre estamos en busqueda de nuevos integrantes!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="5000">
                                        <img src="Resources/icono-simeon.png" class="rounded mx-auto d-block">
                                        <div class="position-relative text-center">
                                            <h5>Sigue en Contacto</h5>
                                            <p>¡Siguenos en nuestras redes para novedades!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="5000">
                                        <img src="Resources/icono-jude.png" class="rounded mx-auto d-block">
                                        <div class="position-relative text-center">
                                            <h5>Nuevas Experiencias</h5>
                                            <p>¡Comparte tus jugadas favoritas con nosotros!</p>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="box_s">
                            <div class="boxtext e"><h1>Nuestra Misión</h1><h2>Nuestro objetivo es ser la fuente número uno de información confiable sobre Inazuma Eleven. Queremos que esta wiki sea un recurso útil para nuevos fans y veteranos por igual, ofreciendo guías detalladas, perfiles de personajes y más.</h2></div>
                            <div class="objeto-main"><img src="Resources/ilustracion jude.png"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="lbox2">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th class="wide-text" colspan="2">Otras Wikis</th>
                                        <th scope="col">Idioma</th>
                                        <th scope="col">Enlaces</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="col-md-auto" colspan="2">Inazuma Eleven Wiki</td>
                                        <td class="wide-text">Castellano</td>
                                        <td><a href="https://inazuma.fandom.com/es/wiki/Inazuma_Eleven_Wiki">https://inazuma.fandom.com/es/wiki/Inazuma_Eleven_Wiki</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="wide-text" colspan="2">Inazuma Eleven Wiki</td>
                                        <td class="wide-text">Inglés</td>
                                        <td><a href="https://inazuma-eleven.fandom.com/wiki/Inazuma_Eleven_Wiki">https://inazuma-eleven.fandom.com/wiki/Inazuma_Eleven_Wiki</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="wide-text" colspan="2">Inazuma Eleven Wikipedia</td>
                                        <td class="wide-text">Ambos</td>
                                        <td><a href="https://es.wikipedia.org/wiki/Inazuma_Eleven">https://es.wikipedia.org/wiki/Inazuma_Eleven</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="wide-text" colspan="2">Inazuma Eleven Wikipedia</td>
                                        <td class="wide-text">Ambos</td>
                                        <td><a href="https://inazuma-eleven-answers.fandom.com/wiki/Inazuma_Eleven_Answers_Wiki">https://inazuma-eleven-answers.fandom.com/wiki/Inazuma_Eleven_Answers_Wiki</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td class="wide-text" colspan="2">Inazuma Eleven Wikipedia</td>
                                        <td class="wide-text">Ambos</td>
                                        <td><a href="https://es.wikipedia.org/wiki/Inazuma_Eleven">https://es.wikipedia.org/wiki/Inazuma_Eleven</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col">
                        <div class="lbox1 b">
                            <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="5000">
                                        <img src="Resources/icono xavier.webp" class="rounded mx-auto d-block">
                                        <div class="position-relative text-center">
                                            <h5>Unetenos</h5>
                                            <p>¡Siempre estamos en busqueda de nuevos integrantes!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="5000">
                                        <img src="Resources/icono willy.webp" class="rounded mx-auto d-block">
                                        <div class="position-relative text-center">
                                            <h5>Sigue en Contacto</h5>
                                            <p>¡Siguenos en nuestras redes para novedades!</p>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_a">
                            <div class="objeto-main"><img src="Resources/ilustracion archer.png"></div>
                            <div class="boxtext g"><h1>Unete a Nuestra Comunidad</h1><h3>En la Inazuma Eleven Wiki, valoramos cada contribución y creemos que cada fan tiene una historia única que contar. Ya seas un veterano en la serie o un recién llegado, tu perspectiva es vital para nosotros. Únete a nuestra comunidad y comparte tus conocimientos, participa en discusiones apasionantes y ayuda a construir la base de datos más completa sobre el universo de Inazuma Eleven.</h3></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="flexmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d885.8983233686329!2d-70.3522993523588!3d-27.357180790545108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2scl!4v1728875608936!5m2!1ses-419!2scl" width="1100" height="340" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div class="box1 d">
                                <form>
                                    <div class="mb-3"><input type="text" class="form-control" id="iname" placeholder="Nombre"></div>
                                    <div class="mb-3"><input type="text" class="form-control" id="imail" aria-describedby="emailHelp" placeholder="Correo"></div>
                                    <div class="mb-3"><input type="text" class="form-control" id="iasunto" placeholder="Asunto"></div>
                                    <div class="mb-3"><textarea class="form-control" id="itext" rows="6" placeholder="Mensaje"></textarea></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="flex">
                            <div class="ajuste1">
                                <div class="card" style="width: 18rem;">
                                    <img src="Resources/icono ie.png" class="card-img-top">
                                    <div class="card-body">
                                        <p class="card-text">Fans dedicados a Inazuma Eleven, creando comunidad y pasión.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ajuste2">
                                <div class="card">
                                    <div class="card-header">Quote</div>
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0"><p>En el momento en que los seres humanos pensamos que no podemos hacerlo... Allí es exactamente cuando somos capaces de llevar a cabo todo nuestro potencial</p>
                                        <footer class="blockquote-footer">Mark Evans<cite title="Source Title">Inazuma Eleven 1</cite></footer></blockquote>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
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