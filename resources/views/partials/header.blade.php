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
                     <a class="logo" href="{{ url('/') }}"><img src="images/logo.png" alt="#" /></a>
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