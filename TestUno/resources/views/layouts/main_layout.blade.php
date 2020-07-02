<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title></title>
  </head>
  <body>
    @include('components.header')
    @yield('content')
    @include('components.footer')

    <script src="/js/app.js" charset="utf-8"></script>
  </body>
</html>
