var map;
var ultimoMarcador;
var geocoder;

function initMap()
{
	var bahiaBlanca = new google.maps.LatLng(-38.7167, -62.2833);

	map = new google.maps.Map(document.getElementById('map'), {
	  	zoom: 15,
	  	center: bahiaBlanca,
        disableDoubleClickZoom: true,
		zoomControl: false,
		scrollwheel: false,
    	styles:
    	[
	      	{
		        featureType: "poi",
		        elementType: "labels",
		        stylers:
		        [
		          {
		          	visibility: "off"
		          }
		        ]
	        }
    	]
	});

    ultimoMarcador = new google.maps.Marker;
    geocoder = new google.maps.Geocoder();

    google.maps.event.addListener(map,'dblclick',function(event)
    {
		var latitud = event.latLng.lat();
		var longitud = event.latLng.lng();

		crearMarcador(latitud, longitud);
        var latLng = new google.maps.LatLng(latitud, longitud);
        mostrarDireccion(latLng);
	});
}

function crearMarcador(latitud, longitud)
{
    ultimoMarcador.setMap(null);
    ultimoMarcador = new google.maps.Marker({
        position: new google.maps.LatLng(latitud, longitud),
        map: map,
        label: "S"
    });
}

function mostrarDireccion(latLng)
{
    geocoder.geocode({'latLng': latLng}, function(results, status)
    {
        if (status == google.maps.GeocoderStatus.OK)
        {
            if (results[0])
            {
                var numero = results[0].address_components[0].short_name;
                var calle = results[0].address_components[1].short_name;
                var direccion = calle + " " + numero;
                $('#direccionServicio').val(direccion);
            }
        }
    });
}
