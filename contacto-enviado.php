<?php 
	$nombre = $_POST['nombre'];
    $tel = $_POST['tel'];
	$email = $_POST['email'];
    $empresa = $_POST['empresa'];
	$consulta = $_POST['consulta'];
	$asunto = 'Consulta desde la web de Enbabia';
	$consulta = "Nombre: ".$nombre." 
    Email: ".$email."
    Tel: ".$tel."
    Empresa: ".$empresa."
    Consulta:".$_POST['consulta'];


	if(mail('hola@enbabiaagencia.com', $asunto, $consulta)){
		$mensajeok='Correo enviado.';
	}
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Enbabia</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="css/styles.css?ver=9" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>

    <header>

        <a href="#" name="up"></a>

        <div class="header-nav">

            <nav class="enlaces-header2">

                <p class="logo"><a href="index.html"><img src="img/logo-enbabia-negro.png" alt="Enbabia"></a></p>

                <ul class="menu menu-principal">
                    <li><a href="conocenos.html#conocenos">Conocenos</a></li>
                    <li><a href="servicios.html#servicios">Servicios</a></li>
                    <li><a href="clientes.html#clientes">Clientes</a></li>
                    <li><a href="contacto.html#contacto">Contacto</a></li>
                </ul>

                <div class="hamburguer icon-hamb">
                    <i class="fas fa-bars"></i>
                </div>

            </nav>

        </div>

        <div class="header">

            <div class="banner">

                <div id="banner" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#banner" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item carousel-item1 active" data-bs-interval="6000">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Potenciá tu marca en el mundo digital</h1>
                                <p>Estrategias digitales 100% personalizadas según las necesidades de cada negocio, para conseguir y fidelizar clientes.</p>
                                <a href="#servicios">Conocé más</a>
                            </div>
                            <img class="carousel-image" src="img/banner1.png" class="d-block" alt="...">
                      </div>
                      <div class="carousel-item carousel-item2" data-bs-interval="6000">
                        <div class="carousel-item0">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Hacé de tu evento una experiencia memorable</h1>
                                <p>Te ofrecemos planificación integral con ejecución precisa y que cuide cada detalle, para que todo salga como siempre soñaste.</p>
                                <a href="#servicios">Conocé más</a>
                            </div>
                            <img class="carousel-image" src="img/banner2.png" class="d-block" alt="...">
                        </div>
                      </div>
                      <div class="carousel-item carousel-item3" data-bs-interval="6000">
                        <div class="carousel-item0">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>¡Que todos hablen de tu marca!</h1>
                                <p>Conectamos tu marca con líderes de opinión para llegar a nuevas audiencias.</p>
                                <a href="#servicios">Conocé más</a>
                            </div>
                            <img class="carousel-image" src="img/banner3.png" class="d-block" alt="...">
                        </div>
                      </div>
                    </div>
                </div>

            </div>

        </div>

    </header>

    <main>

        <a href="#" name="conocenos"></a>

        <section class="quien-soy">

            <div>
                <h2>¡Hola, soy Mili!</h2>
                <p>Soy Técnica Superior en Organización de Eventos y Especialista en Marketing Digital.</p>
                <p>Desde el 2019 trabajo con un equipo de profesionales en el área, y más de 50 emprendedores y empresas confiaron en nosotros para sus estrategias de comunicación. Nos enfocamos en servicios 100% personalizados para que tu marca la rompa.</p>
                <p>¡Animate a transformar y potenciar tu negocio!</p>
                <a href="#contacto">Explotemos tu marca</a>
            </div>

            <div class="mili">&nbsp;</div>

            <!-- <img src="img/quien-soy.png" alt=""> -->

        </section>

        <a href="#" name="servicios"></a>

        <h1>Servicios</h1>

        <section class="servicios">

                <article class="servicios-portada">
                    <p>&nbsp;</p>
                </article>

                <article class="servicio-mkt">
                    <div>
                        <h2>Marketing Digital</h2>
                        <p>Posicionamos tu empresa en redes sociales priorizando la interacción con tu audiencia. Diseñamos e implementamos tu estrategia digital.</p>
                        <a href="#contacto">¿Te interesa?</a>
                    </div>
                </article>

                <article class="servicio-eventos">
                    <div>
                        <h2>Eventos sociales & corporativos</h2>
                        <p>Eventos sociales y corporativos 360°. Nos encargamos de absolutamente todo para que vos puedas desligarte y... Disfrutar.</p>
                        <a href="#contacto">¿Te interesa?</a>
                    </div>
                </article>

                <article class="servicio-prensa">
                    <div>
                        <h2>Prensa & Influencers</h2>
                        <p>Llevá tu marca al siguiente nivel. Llegá a una nueva audiencia que aún no te conoce. Aliate con personalidades que compartan tus valores y tengan un público de tu interés.</p>
                        <a href="#contacto">¿Te interesa?</a>
                    </div>
                </article>

        </section>
        
        <a href="#" name="clientes"></a>

        <section class="testimonios">

            <h1>Confían en Enbabia</h1>
            
            <div class="blockquotes">
                    
                <article>
                    <blockquote><strong>"</strong> Muchas gracias por todo!! Agradecida de todo lo que hacés y súper conforme! Muy contenta de la decisión que tomé al trabajar con ustedes!</blockquote>
                    <div class="card-test">
                        <!-- <img src="img/testimonio1.png" alt=""> -->
                        <div>
                            Day
                            <span>Fouetté</span>
                        </div>
                    </div>
                </article>

                <article>
                    <blockquote><strong>"</strong> Te quería decir que me re gusta como lo estás manejando, ya se que van un par de días no más pero se siente la juventud y el tono más copado. Le hacía re falta eso.</blockquote>
                    <div class="card-test">
                        <div>
                            Estefi
                            <span>Nyübu</span>
                        </div>
                    </div>
                </article>

                <article>
                    <blockquote><strong>"</strong> Es agradable el sentimiento que brindan con cada propuesta creativa. En cada una de ellas llevan el germen de la esperanza. Gracias por compartir juntos semejantes desafíos.</blockquote>
                    <div class="card-test">
                        <div>
                            Claudio 
                            <span>Studio Polisello</span>
                        </div>
                    </div>
                </article>
            
            </div>

            <div class="logos desktop">
                <div id="clientes-slider" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="5000">
                        <img src="img/clientes.png?ver=3" class="d-block" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img src="img/clientes2.png?ver=3" class="d-block" alt="...">
                      </div>
                    </div>
                  </div>
            </div>

            <div class="logos mob">
                <div id="clientes-slider" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="5000">
                        <img src="img/clientes1-mob.png" class="d-block center" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img src="img/clientes2-mob.png" class="d-block center" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img src="img/clientes3-mob.png" class="d-block center" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img src="img/clientes4-mob.png" class="d-block center" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img src="img/clientes5-mob.png" class="d-block center" alt="...">
                      </div>
                    </div>
                  </div>
            </div>

            <div class="empecemos">
                <h2>¿Tenés un proyecto en mente?</h2>
                <a href="#contacto">¡Empecemos!</a>
            </div>

        </section>

        <section class="ig">
    
            <h2><i class="fa-brands fa-instagram"></i> <a href="https://www.instagram.com/enbabiaagencia">@enbabiaagencia</a></h2>
        
            <script src="https://s.electricblaze.com/widget.js" defer></script>
            <div class="electricblaze-id-2Uhx8se"></div>

        </section> 

        <a href="#" name="contacto"></a>

        <section class="contacto">
    
            <h1>¡Tomemos un café virtual!</h1>

            <div class="box-container">

                <form action="contacto-enviado.php" method="POST" class="form">
        
                  <div class="form__container">
        
                    <div class="form__group">
                      <input type="text" id="nombre" name="nombre" class="form__input" placeholder=" " required>
                      <label for="nombre" class="form__label">Nombre y apellido:</label>
                      <span class="form__line"></span>
                    </div>

                    <div class="form__group">
                        <input type="number" id="tel" name="tel" class="form__input" name="tel" placeholder=" " required>
                        <label for="tel" class="form__label">Celular:</label>
                        <span class="form__line"></span>
                      </div>
        
                    <div class="form__group">
                      <input type="email" id="email" name="email" class="form__input" placeholder=" " required>
                      <label for="email" class="form__label">E-mail:</label>
                      <span class="form__line"></span>
                    </div>
        
                    <div class="form__group">
                      <input type="text" id="empresa" name="empresa" class="form__input" name="empresa" placeholder=" " required>
                      <label for="empresa" class="form__label">Marca/Empresa:</label>
                      <span class="form__line"></span>
                    </div>
        
                    <div class="form__group">
                      <input type="textarea" name="consulta" id="consulta" class="form__input" placeholder=" " required>
                      <label for="consulta" class="form__label">Consulta:</label>
                      <span class="form__line"></span>
                    </div>
        
                    <div class="form__group">
                      <button type="submit" class="form__submit">Enviar</button>
                    </div>
        
                  </div>
        
                </form>
            
            </div>

        </section> 

    </main>

    <footer>

        <div class="footer-content">

            <div class="logo-footer">

                <img src="img/logo-enbabia-negro.png" alt="Enbabia">

            </div>

            <div class="links">

                <div>
                    <a href="https://www.instagram.com/enbabiaagencia" target="_blank"><i class="fa-brands fa-instagram"></i></a>

                    <a href="https://www.linkedin.com/company/66962056/admin/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>

                    <a href="https://www.facebook.com/enbabiaagencia" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            
                    <a href="https://wa.link/hze5bd" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </div>

                <p><a href="mailto:hola@enbabiaagencia.com" target="_blank"><i class="fa-solid fa-envelope"></i>
                            hola@enbabiaagencia.com</a></p>

            </div>

        </div>

        <div class="copy">Enbabia - Copyright 2023 &copy; - Todos los derechos reservados.</div>

        <p class="up"><a href="#up"><i class="fa-solid fa-arrow-up"></i></a></p>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9d05f327bd.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>