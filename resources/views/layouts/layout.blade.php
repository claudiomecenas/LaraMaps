<!doctype html>
<html lang="pt-br">
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet" >

    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>

    <title>LaraMaps - @yield('title')</title>
  </head>

  <body>   

    @include('layouts.header')   

    <div class="container-body">
        <h1 class="text-center">Parque Ibirapuera</h1>
        <div id="map"></div>  
    </div> 

    @yield('content')
            
    @include('layouts.footer')
    
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