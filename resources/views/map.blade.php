<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps</title>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>

    <h1>Parque Ibirapuera</h1>
    <div id="map"></div>
    <a href="/">Voltar</a>

    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap" async defer></script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -23.58688, lng: -46.66000}, // lat e lng do Parque Ibirapuera (São Paulo)
                zoom: 12
            });
        }
    </script>
</body>
</html>