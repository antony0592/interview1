<!doctype html>
<html lang="es">
    @include('template.secciones.head')
    @yield('csspersonalizado')
  <body>
      @include('template.secciones.nav')
      <div class="container">
        @yield('container')
      </div>
      @include('template.secciones.footer')
    <!-- JQUERY core JS -->   
    <script src="{{ asset('js/plugins/jquery/jquery-3.4.1.slim.js') }}"></script>
    <!-- Bootstrap core JS -->
    <script src="{{ asset('css/plugins/bootstrap/js/bootstrap.js') }}"></script>
    @yield('jspersonalizado')
  </body>
</html>

