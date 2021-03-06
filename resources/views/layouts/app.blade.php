<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'PLQR') }}</title>
<!-- new
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css"> -->  

  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link href="{{asset('/css/ladda.scss')}}" rel="stylesheet"> 
  <link href="{{asset('/css/ladda-themed.scss')}}" rel="stylesheet">      
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</head>
<body>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
