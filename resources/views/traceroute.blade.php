<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Autocomplete e Traçar Rota</title>
   
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/route.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="jumbotron">

        <div class="container-fluid">   

            <form class="form-horizontal">
                <div class="form-group">
                    <label for="from" class="col-xs-2 control-label"><i class="far fa-dot-circle"></i></label>
                    <div class="col-xs-4 formulario">
                        <input type="text" id="from" placeholder="Origem" class="form-control">
                    </div>
               </div>
               <div class="form-group"> 
                    <label for="to" class="col-xs-2 control-label"><i class="fas fa-map-marker-alt"></i></label>
                    <div class="col-xs-4 formulario">
                        <input type="text" id="to" placeholder="Destino" class="form-control">
                    </div>      
                </div>        
            </form>

            <div class="col-xs-offset-2 col-xs-10 formulario">
                <button class="btn btn-primary btn-lg" onclick="calcRoute();">Traçar Rota</button>
            </div>

        </div>

        <div class="container-fluid">
            <div style="background-color:#f8f9fa;" id="output"></div>
            <div id="googleMap"></div>
        </div>

    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initMap" async defer></script>
    <script src="{{ asset('js/route.js') }}"></script>

</body>
</html>
