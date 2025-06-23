<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sensus')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Más estilos aquí -->
</head>
<body>
    @include('partials.nav') {{-- si deseas separar el menú --}}
    @yield('content')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>