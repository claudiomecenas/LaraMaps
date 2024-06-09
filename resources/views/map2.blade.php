<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps</title>
    <style>
        #map3 {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map3"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap3" async defer></script>
    <script>
        function initMap3() {
            var map = new google.maps.Map(document.getElementById('map3'), {
                center: {lat: -23.58688, lng: -46.66000}, // lat e lng do Parque Ibirapuera (São Paulo)
                zoom: 12
            });
        }
    </script>
</body>
</html>