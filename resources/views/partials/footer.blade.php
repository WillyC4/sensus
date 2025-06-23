   <!--  footer -->
<footer>
   <div class="footer">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <a class="logo2" href="{{ url('/') }}"><img src="{{ asset('images/loogo2.png') }}" alt="Logo Sensus" /></a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
               <h3>Contáctanos</h3>

               <div class="contact-info" style="   display: grid; gap: 20px;">
               <ul class="location_icon">
                  <li><a href="#"><i class="fa fa-map-marker"></i></a> Pichincha, Ecuador</li>
                  <li><a href="#"><i class="fa fa-envelope"></i></a> sensus.marketing@gmail.com</li>
                  <li><a href="#"><i class="fa fa-phone"></i></a> +593 98 765 4321</li>
               </ul>

               <ul class="social_icon">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               </ul>
</div>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
               <h3>Menú</h3>
               <ul class="link_icon">
                  <li><a href="{{ url('/') }}">Inicio</a></li>
                  <li><a href="{{ url('/about') }}">Sobre nosotros</a></li>
                  <li><a href="{{ url('/services') }}">Servicios</a></li>
                  <li><a href="{{ url('/team') }}">Equipo</a></li>
                  <li><a href="{{ url('/contact') }}">Contacto</a></li>
               </ul>
            </div>
            <br>
            <div class="col-lg-3 col-md-6 col-sm-6">
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
   <div class="text-center py-2 bg-dark text-light">
      <small>2025 – Sensus. Experiencias que dejan huella.</small>
   </div>

</footer>

   <!-- end footer -->