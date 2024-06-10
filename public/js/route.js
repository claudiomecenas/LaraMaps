//set map options
var myLatLng = { lat: -23.555609, lng: -46.664038 };
var mapOptions = {
    center: myLatLng,
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP

};

//create map
var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

//create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();

//create a DirectionsRenderer object which we will use to display the route
var directionsDisplay = new google.maps.DirectionsRenderer();

//bind the DirectionsRenderer to the map
directionsDisplay.setMap(map);


//define calcRoute function
function calcRoute() {
    //create request
    var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
        unitSystem: google.maps.UnitSystem.METRIC, //IMPERIAL para milhas
        // DOC: https://developers.google.com/maps/documentation/javascript/distancematrix?hl=pt-br#transit_options
    }

    //pass the request to the route method
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            metragem = result.routes[0].legs[0].distance.value;
            transfercomfort = Math.round((metragem/1000))*4.5;
            //transfereconomic = Math.round((metragem/1000))*2.5;
            transferblack = Math.round((metragem/1000))*5.7;
            
            valorcomfort = transfercomfort.toLocaleString('pt-br', {minimumFractionDigits: 2});
            
            valorblack = transferblack.toLocaleString('pt-br', {minimumFractionDigits: 2});
            
            //valoreconomic = transfereconomic.toLocaleString('pt-br', {minimumFractionDigits: 2});
            
            distanciapercorrida = result.routes[0].legs[0].distance.text;

            //Get distance and time
            const output = document.querySelector('#output');
            //output.innerHTML = "<div class='alert-info'>De: " + document.getElementById("from").value + ".<br />Para: " + document.getElementById("to").value + ".<br /> Distância percorrida <i class='fas fa-road'></i> : " + result.routes[0].legs[0].distance.text + ".<br />Duração <i class='fas fa-hourglass-start'></i> : " + result.routes[0].legs[0].duration.text + ".</div>";
            output.innerHTML = "Distância: <i class='fas fa-road'></i> : " + result.routes[0].legs[0].distance.text;
            // + ".<br />Duração: <i class='fas fa-hourglass-start'></i> : " + result.routes[0].legs[0].duration.text + ".";

            //display route
            directionsDisplay.setDirections(result);
        } else {
            //delete route from map
            directionsDisplay.setDirections({ routes: [] });
            //center map in London
            map.setCenter(myLatLng);

            //show error message
            output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> OPS! Parece que não dá para dirigir até este destino.</div>";
        }
    });

}



//create autocomplete objects for all inputs
// var options = {
//     types: ['(regions)'] // cities
// }

var input1 = document.getElementById("from");
//var autocomplete1 = new google.maps.places.Autocomplete(input1, options);
var autocomplete1 = new google.maps.places.Autocomplete(input1);

var input2 = document.getElementById("to");
//var autocomplete2 = new google.maps.places.Autocomplete(input2, options);
var autocomplete2 = new google.maps.places.Autocomplete(input2);