<!DOCTYPE html>
<html>

<head>
  <title>@yield('title')</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <div class="container">
    @yield('content')
  </div>
</body>

</html>