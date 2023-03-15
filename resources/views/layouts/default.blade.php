<!doctype html>
<html lang="en-US">
  <head>
     @include('includes.head')
  </head>

  <body data-bs-spy="scroll" data-bs-offset="170" data-bs-target=".privacy-policy-sidebar-menu">
     <header class="row">
         @include('includes.header')
     </header>

     @yield('content')

     <footer class="row">
         @include('includes.footer')
     </footer>
  </body>
</html>
