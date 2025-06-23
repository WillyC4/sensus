@extends('layouts.app')

@section('title', 'Inicio | Sensus')

@section('content')

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
                     <a style="margin-left: 0;" class="read_morea" href="#">Inscribirse! <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
               <h1>Vista:</h1>
               <p>Creamos entornos visuales atractivos que refuerzan la identidad de tu marca y cautivan a tus clientes.</p>
               </div>
               <div class="col-md-6">
               <img style="max-height: 270px" src="images/vista.jpg" alt="Vista" class="img-fluid rounded">
               </div>
            </div>

            <!-- Oído -->
            <div class="row align-items-center my-5 flex-md-row-reverse">
               <div class="col-md-6">
               <h1>Oído:</h1>
               <p>Diseñamos ambientes sonoros que generan emociones y mejoran la experiencia de compra.</p>
               </div>
               <div class="col-md-6">
               <img style="max-height: 270px" src="images/oido.jpg" alt="Oído" class="img-fluid rounded">
               </div>
            </div>

            <!-- Olfato -->
            <div class="row align-items-center my-5">
               <div class="col-md-6">
               <h1>Olfato:</h1>
               <p>Aplicamos aromas corporativos que fortalecen el recuerdo de marca y la fidelización.</p>
               </div>
               <div class="col-md-6">
               <img style="max-height: 270px" src="images/olfato.jpg" alt="Olfato" class="img-fluid rounded">
               </div>
            </div>

            <!-- Tacto -->
            <div class="row align-items-center my-5 flex-md-row-reverse">
               <div class="col-md-6">
               <h1>Tacto:</h1>
               <p>Seleccionamos materiales, texturas y detalles que transmiten calidad y conectan emocionalmente.</p>
               </div>
               <div class="col-md-6">
               <img style="max-height: 270px" src="images/tacto.jpg" alt="Tacto" class="img-fluid rounded">
               </div>
            </div>

            <!-- Gusto -->
            <div class="row align-items-center my-5">
               <div class="col-md-6">
               <h1>Gusto:</h1>
               <p>En el sector gastronómico, potenciamos sabores y presentaciones para despertar los sentidos y elevar la experiencia.</p>
               </div>
               <div class="col-md-6">
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
   <!-- end service section -->

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

            <div class="row justify-content-center">
               <!-- Cafeterías & Restaurantes -->
               <div class="col-md-4 col-sm-6">
                  <div class="portfolio_img">
                     <img src="images/potf1.jpg" alt="Cafeterías y Restaurantes" />
                     <div class="middle">
                        <div class="text2">Cafeterías & Restaurantes</div>
                        <p style="color: white;">Diseño de ambiente, aroma corporativo, música y otros estímulos que fidelizan a tus clientes.</p>
                     </div>
                  </div>
               </div>

               <!-- Tiendas de Ropa & Moda -->
               <div class="col-md-4 col-sm-6">
                  <div class="portfolio_img">
                     <img src="images/potf2.jpg" alt="Tiendas de Ropa y Moda" />
                     <div class="middle">
                        <div class="text2">Tiendas de Ropa & Moda</div>
                        <p style="color: white;">Estrategias sensoriales que refuerzan el estilo y la identidad de tu marca.</p>
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
                        <p class="text-muted">Coordinadora de Marketing</p>
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
                     <h2><strong class="yellow">Contáctanos</strong><br>Solicita una Asesoría</h2>
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

@endsection