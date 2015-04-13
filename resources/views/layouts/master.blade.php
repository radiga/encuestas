<!DOCTYPE html>
<html>
 <head>
    @include('layouts.head')
    @include('layouts.header_adminLTE')

 </head>

 <body class=""skin-blue">
  <div class=""wrapper">
 <!-- menubar -->
  <header>
    @include('layouts.header')
  </header><!-- /header -->

  @include('layouts.sidebar')
  @include('layouts.contenido_adminLTE')

  <!-- footer -->
  <footer>
    @include('layouts.footer')
  </footer>
 </div>
 </body>
</html>