<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Landing on Sensus</title>
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
   <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
   <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body class="main-layout">

<!-- Hero -->
<section class="landing-hero d-flex align-items-center position-relative" style="min-height: 100vh; overflow: hidden;">
   <!-- VIDEO de fondo -->
   <video autoplay muted loop playsinline class="bg-video">
      <source src="{{ asset('images/galaxia.mp4') }}" type="video/mp4">
      Tu navegador no soporta video HTML5.
   </video>

   <!-- Contenido encima -->
   <div class="container text-center text-white position-relative z-1">
      <h1 class="display-4 mb-3">Haz que tu marca se sienta con <strong>Sensus</strong></h1>
      <p class="lead mb-4">Creamos experiencias sensoriales que conectan emocionalmente con tus clientes.</p>
      <br>
      <a style="color: white; background-color: #e4ab00;" href="#contacto" class="btn btn-warning btn-lg">Iniciar contacto</a>
      <br><br>
      <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Visita nuestra Página Web</a>
   </div>
</section>

<!-- Por qué elegirnos -->
<section id="sobre" class="bg-light">
   <div class="container eleccion">
      <div style="padding: 30px 0px;" class="row align-items-center">

         <div style="text-align: center;" class="col-md-6">
            <img src="{{ asset('images/ba_blk.png') }}" alt="Sobre Sensus" class="img-fluid rounded">
         </div>
         <div class="col-md-6">
            <h2 style="padding: 30px 0px 0px;" class="mb-3">¿Por qué elegirnos?</h2>
            <p>Más allá del diseño: creamos experiencias que estimulan los sentidos, despiertan emociones y posicionan tu marca.</p>
            <br>
            <ul>
               <li>🔍 Diagnóstico sensorial personalizado</li>
               <li>🎯 Estrategias enfocadas en resultados</li>
               <li>🌿 Experiencias auténticas, humanas y memorables</li>
            </ul>
         </div>
      </div>
   </div>
</section>

<!-- Los 5 Sentidos -->
<section class="sentidos text-center bg-white">
   <div class="container">
      <h2 class="mb-4"><strong class="yellow">LOS 5 SENTIDOS</strong><br>NUESTRA ESPECIALIDAD</h2>

      <div class="row align-items-center my-5">
         <div class="col-md-6">
            <h3><strong>Vista:</strong></h3>
            <p>Espacios visuales que refuerzan tu identidad y generan recordación inmediata.</p>
         </div>
         <div class="col-md-6">
            <img src="{{ asset('images/vista.jpg') }}" alt="Vista" class="img-fluid rounded" style="max-height: 270px;">
         </div>
      </div>

      <div class="row align-items-center my-5 flex-md-row-reverse">
         <div class="col-md-6">
            <h3><strong>Oído:</strong></h3>
            <p>Ambientes sonoros que transmiten emociones y refuerzan la experiencia.</p>
         </div>
         <div class="col-md-6">
            <img src="{{ asset('images/oido.jpg') }}" alt="Oído" class="img-fluid rounded" style="max-height: 270px;">
         </div>
      </div>

      <div class="row align-items-center my-5">
         <div class="col-md-6">
            <h3><strong>Olfato:</strong></h3>
            <p>Aromas que fortalecen la fidelidad y el recuerdo de marca.</p>
         </div>
         <div class="col-md-6">
            <img src="{{ asset('images/olfato.jpg') }}" alt="Olfato" class="img-fluid rounded" style="max-height: 270px;">
         </div>
      </div>

      <div class="row align-items-center my-5 flex-md-row-reverse">
         <div class="col-md-6">
            <h3><strong>Tacto:</strong></h3>
            <p>Materiales y texturas que elevan la percepción de calidad.</p>
         </div>
         <div class="col-md-6">
            <img src="{{ asset('images/tacto.jpg') }}" alt="Tacto" class="img-fluid rounded" style="max-height: 270px;">
         </div>
      </div>

      <div class="row align-items-center my-5">
         <div class="col-md-6">
            <h3><strong>Gusto:</strong></h3>
            <p>Presentaciones gastronómicas que activan emociones y sentidos.</p>
         </div>
         <div class="col-md-6">
            <img src="{{ asset('images/gusto.jpg') }}" alt="Gusto" class="img-fluid rounded" style="max-height: 270px;">
         </div>
      </div>
   </div>
</section>

<!-- Portfolio reducido -->
<section class="portfolio bg-light">
   <div class="container">
      <div class="text-center mb-5">
         <h2><strong class="yellow">EXPERIENCIAS</strong><br>Espacios que conectan con la emoción</h2>
         <p>Conceptos creativos enfocados en la estimulación multisensorial</p>
      </div>

            <div class="row justify-content-center">
               <!-- Cafeterías & Restaurantes -->
               <div class="col-md-4 col-sm-6">
                  <div class="portfolio_img">
                     <img src="images/potf1.jpg" alt="Cafeterías y Restaurantes" />
                     <div class="middle">
                        <div class="text2">Cafeterías & Restaurantes</div>
                        <p style="margin: 7px; color: white;">Diseño de ambiente, aroma corporativo, música y otros estímulos que fidelizan a tus clientes.</p>
                     </div>
                  </div>
               </div>

               <!-- Tiendas de Ropa & Moda -->
               <div class="col-md-4 col-sm-6">
                  <div class="portfolio_img">
                     <img src="images/potf2.jpg" alt="Tiendas de Ropa y Moda" />
                     <div class="middle">
                        <div class="text2">Tiendas de Ropa & Moda</div>
                        <p style="margin: 7px; color: white;">Estrategias sensoriales que refuerzan el estilo y la identidad de tu marca.</p>
                     </div>
                  </div>
               </div>
            </div>

   </div>
</section>

<!-- Contacto -->
<div id="contacto" class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text-center">
               <h2 style="text-transform: none;"><strong class="yellow">Contáctanos</strong><br>Queremos conocer tu proyecto</h2>
               <p class="text-black">Conecta con nosotros y dale un nuevo sentido a tu marca.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-8 offset-md-2">
            <form id="post_form" class="contact_form">
               <div class="row">
                  <div class="col-md-6 mb-3">
                     <input class="contact_control" placeholder="Nombre completo" type="text" name="nombre" required>
                  </div>
                  <div class="col-md-6 mb-3">
                     <input class="contact_control" placeholder="Correo electrónico" type="email" name="email" required>
                  </div>
                  <div class="col-md-6 mb-3">
                     <input class="contact_control" placeholder="Teléfono" type="tel" name="telefono">
                  </div>
                  <div class="col-md-6 mb-3">
                     <select name="servicio" class="contact_control" required>
                        <option value="">Servicio de interés</option>
                        <option value="branding">Branding y diseño</option>
                        <option value="sensorial">Marketing sensorial</option>
                        <option value="estrategia">Estrategia de marca</option>
                     </select>
                  </div>
                  <div class="col-md-12 mb-3">
                     <textarea class="textarea" name="mensaje" rows="4" placeholder="¿Cómo podemos ayudarte?" required></textarea>
                  </div>
                  <div class="col-md-12 text-center">
                     <button class="send_btn">Enviar mensaje</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- Footer -->
<footer class="text-center py-2 mt-5 bg-dark text-light">
   <small>2025 - Sensus. Experiencias que dejan huella.</small>
</footer>
