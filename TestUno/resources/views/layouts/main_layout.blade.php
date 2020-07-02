<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>

    <title></title>
  </head>
  <body>
    <header>
      @include('components.header')
    </header>

    @yield('content')
    <footer>
      @include('components.footer')
    </footer>

  </body>
</html>
