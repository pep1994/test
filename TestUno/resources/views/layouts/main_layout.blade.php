<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <script src="https://kit.fontawesome.com/d99074f875.js" crossorigin="anonymous"></script>

    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>

    <title></title>
  </head>
  <body>

    @include('components.header')

    <div class="main_content">
      @yield('content')
    </div>

    @include('components.footer')

  </body>
</html>
