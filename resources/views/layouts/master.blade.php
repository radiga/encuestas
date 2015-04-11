<!DOCTYPE html>
<html>
 <head>
    @include('layouts.head')
 </head>

 <body>
 <!-- menubar -->
  <header>
    @include('layouts.header')
  </header><!-- /header -->

  <!-- content -->
  <article>
    @yield('content')
  </article>

  <!-- footer -->
  <footer>
    @include('layouts.footer')
  </footer>
 </body>
</html>