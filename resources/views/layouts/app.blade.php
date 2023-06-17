
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Event manager</title>

    <link rel="canonical" href="https://getbootstrap.su/docs/5.0/examples/album/">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" crossorigin="anonymous">

    <meta name="theme-color" content="#7952b3">

  </head>

  <body>
    
    

    <main>
        <div id="id" >

          <div id="alerts">
            @include('layouts.alerts')
          </div>

          <div class="album py-5 bg-light">
              <div class="container">
                  @yield('content')
              </div>
          </div>
        </div>
    </main>


    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

      
  </body>
</html>
