<!DOCTYPE html>
<html lang="es">
<head>
   @include('partials.head')
</head>
<body>
   @include('partials.loader') <!-- Opcional -->
   @include('partials.header')

   <main>
      @yield('content')
   </main>

   @include('partials.footer')

   @include('partials.scripts')
</body>
</html>