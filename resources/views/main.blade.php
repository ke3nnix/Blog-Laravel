<!DOCTYPE html>
<html lang="en">

  <head>

    @include('partials._head')

  </head>

  <body>

    <!-- NAVBAR DE BOOTSTRAP POR DEFAULT -->
    @include('partials._nav')

    <div class="container">

      @yield('contenido')

      @include('partials._footer')
 
    </div> <!-- FIN DEL CONTENEDOR -->

    @include('partials._javascripts')

    @yield('scripts')

  </body>
</html>