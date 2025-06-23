@extends('layouts.app')

@section('title', 'Contacto | Sensus')

@section('content')
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