var map;
var ultimoMarcador;
var geocoder;
var latlng;

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
        latlng = new google.maps.LatLng(latitud, longitud);
		crearMarcador();
        mostrarDireccion();
	});
}

function crearMarcador()
{
    ultimoMarcador.setMap(null);
    ultimoMarcador = new google.maps.Marker({
        position: latlng,
        map: map,
        label: "S"
    });
}

function mostrarDireccion()
{
    geocoder.geocode({'latLng': latlng}, function(results, status)
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

function eliminarMarcador()
{
	ultimoMarcador.setMap(null);
}

function obtenerLatitud()
{
	return latlng.lat();
}

function obtenerLongitud()
{
	return latlng.lng();
}
