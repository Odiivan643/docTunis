<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>
       @yield('title')
   </title>

  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

   @yield('content')



   @include('footer')
</body>
</html>