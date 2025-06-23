<!DOCTYPE html>
<html lang="es">
<head>
   @include('partials.head')
</head>
<body>
   @include('partials.loader')

   @unless (isset($noHeader))
      @include('partials.header')
   @endunless

   <main>
      @yield('content')
   </main>

   @unless (isset($noFooter))
      @include('partials.footer')
   @else
      @include('partials.footer-alt')
   @endunless

   @include('partials.scripts')
</body>
</html>