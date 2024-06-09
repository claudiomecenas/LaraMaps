<!doctype html>

<html lang="pt-br">
 
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraMaps - @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">

    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
  </head>

  <body>
        
        @section('sidebar')
            <nav class="navbar bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand" href="#">
                    <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">
                    </a>
                </div>
            </nav>
        @show
        <div id="map"></div>

        <div class="container">

            @yield('content')
        </div>
    
     <script src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap" async defer></script>

   <script>
        function initMap() {
            var mapbootstrap = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -23.58688, lng: -46.66000}, // lat e lng do Parque Ibirapuera (São Paulo)
                zoom: 12
            });
        }
    </script>


  </body>

</html>