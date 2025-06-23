<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>webwing</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="header_to d_none">
            <div class="container">
               <ul class="social_icon1">
                  <li>Síguenos </li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               </ul>
            </div>

         </div>
         <div class="header_midil">
            <div class="container">
               <div class="row d_flex">
                  <div class="col-md-4 col-sm-4 d_none">
                     <ul class="conta_icon">
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Llámanos : +593 98 765 4321</a> </li>
                     </ul>
                  </div>
                  <div class="col-md-4 col-sm-4 ">
                     <a class="logo" href="#"><img src="images/logo.png" alt="#" /></a>
                  </div>
                  <div class="col-md-4 col-sm-4 d_none">
                     <ul class="conta_icon ">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>  sensus.marketing@gmail.com</a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="header_bo">
            <div class="container">
               <div style="justify-content: center;" class="row">
                  <div class="col-md-9 col-sm-7">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                              </li>
                              <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ url('/about') }}">Sobre Nosotros</a>
                              </li>
                              <li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ url('/services') }}">Servicios</a>
                              </li>
                              <li class="nav-item {{ Request::is('team') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ url('/team') }}">Equipo</a>
                              </li>
                              <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ url('/contact') }}">Contáctanos</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="search-box">
                     <ul style="text-align: left;" class="sign">
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   <section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-lg-7">
               <div class="text-bg" style="padding: 15px;">
                  <h1>Asesores profesionales <br>y de confianza</h1>
                  <span>para su negocio</span>
                  <p>Dale vida a tu negocio con experiencias sensoriales únicas y conecta emocionalmente con tus clientes.</p>
                  <a href="#">Conócenos</a>
               </div>
            </div>
            <div class="col-md-5 col-lg-5">
               <div class="ban_img">
                  <figure><img src="images/ba_ing.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
      <!-- about section -->
      <div id="about" class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12 col-lg-7">
                  <div class="about_box">
                     <div class="titlepage">
                        <h2><strong class="yellow">Sobre Nosotros</strong><br> Creamos experiencias, no solo estrategias</h2>
                     </div>
                     <h3>TODO LO QUE NECESITAS EN UNA SOLA SOLUCIÓN</h3>
                    
                     <p>Te ayudamos a consolidar tu marca a través de marketing sensorial, emocional y experiencial. Nuestra agencia está especializada en el sector gastronómico y textil en Quito, Ecuador.</p>
                     <span class="try">Solicitar prueba Gratuita</span>
                     <a class="read_morea" href="#">Inscribirse! <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
               </div>
               <div class="col-md-12 col-lg-5">
                  <div class="about_img">
                     <figure><img style="max-width: 80%" src="images/about_img2.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->

      <!-- 5 Sentidos -->
      <section class="sentidos">
      <div class="container">
         <div class="titlepage text-center">
            <h2><strong class="yellow">LOS 5 SENTIDOS</strong><br>NUESTRA ESPECIALIDAD</h2>
         </div>

         <!-- Vista -->
         <div class="row align-items-center my-5">
            <div class="col-md-6">
            <h1>Vista 👀</h1>
            <p>Creamos entornos visuales atractivos que refuerzan la identidad de tu marca y cautivan a tus clientes.</p>
            </div>
            <div style="text-align: center;" class="col-md-6">
            <img style="max-height: 270px" src="images/vista.jpg" alt="Vista" class="img-fluid rounded">
            </div>
         </div>

         <!-- Oído -->
         <div class="row align-items-center my-5 flex-md-row-reverse">
            <div class="col-md-6">
            <h1>Oído 🎵</h1>
            <p>Diseñamos ambientes sonoros que generan emociones y mejoran la experiencia de compra.</p>
            </div>
            <div style="text-align: center;" class="col-md-6">
            <img style="max-height: 270px" src="images/oido.jpg" alt="Oído" class="img-fluid rounded">
            </div>
         </div>

         <!-- Olfato -->
         <div class="row align-items-center my-5">
            <div class="col-md-6">
            <h1>Olfato 👃</h1>
            <p>Aplicamos aromas corporativos que fortalecen el recuerdo de marca y la fidelización.</p>
            </div>
            <div style="text-align: center;" class="col-md-6">
            <img style="max-height: 270px" src="images/olfato.jpg" alt="Olfato" class="img-fluid rounded">
            </div>
         </div>

         <!-- Tacto -->
         <div class="row align-items-center my-5 flex-md-row-reverse">
            <div class="col-md-6">
            <h1>Tacto ✋</h1>
            <p>Seleccionamos materiales, texturas y detalles que transmiten calidad y conectan emocionalmente.</p>
            </div>
            <div style="text-align: center;" class="col-md-6">
            <img style="max-height: 270px" src="images/tacto.jpg" alt="Tacto" class="img-fluid rounded">
            </div>
         </div>

         <!-- Gusto -->
         <div class="row align-items-center my-5">
            <div class="col-md-6">
            <h1>Gusto 🍫</h1>
            <p>En el sector gastronómico, potenciamos sabores y presentaciones para despertar los sentidos y elevar la experiencia.</p>
            </div>
            <div style="text-align: center;" class="col-md-6">
            <img style="max-height: 270px" src="images/gusto.jpg" alt="Gusto" class="img-fluid rounded">
            </div>
         </div>
      </div>
      </section>
         <!-- end 5 Sentidos -->


   <!-- service section -->
      <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2><strong class="yellow">servicios</strong><br> Impulsamos el crecimiento de tu negocio a través de</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="ho_color" class="service_box">
                     <img src="images/service_icon1.png" alt="#"/>
                     <h3>Marketing Sensorial Integral</h3>
                     <p>Diseñamos estrategias que estimulan los cinco sentidos para crear experiencias memorables y fortalecer el posicionamiento de tu marca.</p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="ho_color" class="service_box">
                     <img src="images/service_icon2.png" alt="#"/>
                     <h3>Planificación Estratégica</h3>
                     <p>Desarrollamos planes de marketing adaptados a negocios gastronómicos y de moda, optimizando tu impacto en el mercado.</p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="ho_color" class="service_box">
                     <img src="images/service_icon3.png" alt="#"/>
                     <h3>Campañas de Marketing Digital</h3>
                     <p>Diseñamos campañas digitales que conectan con los sentidos y emociones para fortalecer tu marca online.</p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="ho_color" class="service_box">
                     <img src="images/service_icon4.png" alt="#"/>
                     <h3>Consultoría en Posicionamiento Emocional</h3>
                     <p>Creamos vínculos entre tu marca y tus consumidores, basados en emociones, experiencias y percepciones.</p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="ho_color" class="service_box">
                     <img src="images/service_icon5.png" alt="#"/>
                     <h3>Investigación de Mercado Sensorial</h3>
                     <p>Analizamos el comportamiento de tus clientes y su interacción con tu espacio, productos y servicios.</p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="ho_color" class="service_box">
                     <img src="images/service_icon6.png" alt="#"/>
                     <h3>Diseño de Experiencias en Punto de Venta</h3>
                     <p>Transformamos tu local en un entorno que estimula, conecta y fideliza.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- service section -->



   <!-- portfolio -->
<div class="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2><strong class="yellow">PORTFOLIO</strong><br>CREA UNA EXPERIENCIA SENSORIAL ÚNICA PARA TU MARCA</h2>
          <p>Explora cómo transformamos espacios en experiencias multisensoriales que conectan con tus clientes.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Cafeterías & Restaurantes -->
      <div class="col-md-3 col-sm-6">
        <div class="portfolio_img">
          <img src="images/potf1.jpg" alt="Cafeterías y Restaurantes" />
          <div class="middle">
            <div class="text2">Cafeterías & Restaurantes</div>
            <p style="margin: 7px; color: white;">Diseño de ambiente, aroma corporativo, música y otros estímulos que fidelizan a tus clientes.</p>
          </div>
        </div>
      </div>
      <!-- Tiendas de Ropa & Moda -->
      <div class="col-md-3 col-sm-6">
        <div class="portfolio_img">
          <img src="images/potf2.jpg" alt="Tiendas de Ropa y Moda" />
          <div class="middle">
            <div class="text2">Tiendas de Ropa & Moda</div>
            <p style="margin: 7px; color: white;">Estrategias sensoriales que refuerzan el estilo y la identidad de tu marca.</p>
          </div>
        </div>
      </div>
      <!-- Librerías & Espacios culturales -->
      <div class="col-md-3 col-sm-6">
        <div class="portfolio_img">
          <img src="images/potf3.jpg" alt="Librerías y Espacios culturales" />
          <div class="middle">
            <div class="text2">Librerías & Espacios culturales</div>
            <p style="margin: 7px; color: white;">Atmósferas que invitan a la exploración y al confort sensorial.</p>
          </div>
        </div>
      </div>
      <!-- Hoteles & Alojamiento boutique -->
      <div class="col-md-3 col-sm-6">
        <div class="portfolio_img">
          <img src="images/potf4.jpg" alt="Hoteles y Alojamiento boutique" />
          <div class="middle">
            <div class="text2">Hoteles & Alojamiento boutique</div>
            <p style="margin: 7px; color: white;">Experiencias multisensoriales memorables desde la recepción hasta el descanso.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end portfolio -->

   <!-- team  section -->
<div id="team" class="team">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><strong class="yellow">Nuestro Equipo</strong><br>Contamos con un equipo profesional y apasionado por el marketing sensorial</h2>
                  </div>
               </div>
            </div>
            
               <!-- gente -->
               <div class="row">
                  <div class="col-md-3 col-sm-6">
                     <div id="ho_bg" class="team_img text-center">
                        <img src="images/team1.png" alt="Team 1"/>
                        <h4 class="mt-3 mb-1">Nicolás Ortiz</h4>
                        <p class="text-muted">Director de Proyectos</p>
                        <div class="ho_socal">
                           <ul class="social_icont">
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 col-sm-6">
                     <div id="ho_bg" class="team_img text-center">
                        <img src="images/team2.png" alt="Team 2"/>
                        <h4 class="mt-3 mb-1">Camila Llumiquinga</h4>
                        <p class="text-muted">Coordinadora Comercial y de Alianzas Estratégicas</p>
                        <div class="ho_socal">
                           <ul class="social_icont">
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 col-sm-6">
                     <div id="ho_bg" class="team_img text-center">
                        <img src="images/team3.png" alt="Team 2"/>
                        <h4 class="mt-3 mb-1">Micaela Corrales</h4>
                        <p class="text-muted">Directora de Marketing</p>
                        <div class="ho_socal">
                           <ul class="social_icont">
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 col-sm-6">
                     <div id="ho_bg" class="team_img text-center">
                        <img src="images/team4.png" alt="Team 2"/>
                        <h4 class="mt-3 mb-1">Nicole Alvear</h4>
                        <p class="text-muted">Analista de Investigación y Desarrollo Sensorial</p>
                        <div class="ho_socal">
                           <ul class="social_icont">
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>

               </div>
               <!-- fin gente -->
         </div>
      </div>
   <!-- end team  section -->

   <!-- contact  section -->
       <div id="contact" class="contact ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><strong class="yellow">Contáctanos</strong><br>Solicita una Asesoría Gratuita</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <form id="post_form" class="contact_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contact_control" placeholder=" Nombre" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control" placeholder="Número Telefónico " type="type" name="Phone Number ">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Mensaje" type="type" Message="Name">Mensaje </textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Enviar</button>
                        </div>
                  </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <!-- end contact  section -->

   <!--  footer -->
<footer>
   <div class="footer">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <a class="logo2" href="{{ url('/') }}"><img src="{{ asset('images/loogo2.png') }}" alt="Logo Sensus" /></a>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-6">
               <h3>Contáctanos</h3>
               <ul class="location_icon">
                  <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Calle 145, Londres<br>Reino Unido</li>
                  <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>demo@gmail.com<br>demo@gmail.com</li>
                  <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>+01 1234567890<br>+01 1234567889</li>
               </ul>
               <ul class="social_icon">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
               <h3>Menú</h3>
               <ul class="link_icon">
                  <li><a href="{{ url('/') }}">Inicio</a></li>
                  <li><a href="{{ url('/about') }}">Sobre nosotros</a></li>
                  <li><a href="{{ url('/services') }}">Servicios</a></li>
                  <li><a href="{{ url('/team') }}">Equipo</a></li>
                  <li><a href="{{ url('/client') }}">Clientes</a></li>
                  <li><a href="{{ url('/contact') }}">Contacto</a></li>
               </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
               <h3>Boletín</h3>
               <form id="request" class="main_form">
                  <div class="row">
                     <div class="col-md-12">
                        <input class="news" placeholder="Tu correo electrónico" type="email" name="email">
                     </div>
                     <div class="col-md-12">
                        <button class="send_btn">Enviar</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</footer>

   <!-- end footer -->
   
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>