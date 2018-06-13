var map;
var ultimoMarcador;
var geocoder;
var latlng;

function initMap()
{
	var bahiaBlanca = new google.maps.LatLng(-38.7167, -62.2833);

	map = new google.maps.Map(document.getElementById('map'), {
	  	zoom: 13,
	  	center: bahiaBlanca,
        disableDoubleClickZoom: true,
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

	cargarMarcadorSiEditar();

    google.maps.event.addListener(map,'click',function(event)
    {
		var latitud = event.latLng.lat();
		var longitud = event.latLng.lng();
        latlng = new google.maps.LatLng(latitud, longitud);
		crearMarcador(latlng);
        mostrarDireccion(latlng);
	});
}

function crearMarcador(latlng)
{
    ultimoMarcador.setMap(null);
    ultimoMarcador = new google.maps.Marker({
        position: latlng,
        map: map
    });
}

function mostrarDireccion(latlng)
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
                $('#direccion').val(direccion);
				$('#latitud').val(latlng.lat);
				$('#longitud').val(latlng.lng);
            }
        }
    });
}

function eliminarMarcador()
{
	ultimoMarcador.setMap(null);
}

function cargarMarcadorSiEditar()
{
	let latitud = $("#latitud").val();
    let longitud = $("#longitud").val();

	if (latitud != "" && longitud != "")
	{
		let latlng = new google.maps.LatLng(latitud, longitud);
		crearMarcador(latlng);
	}
}
