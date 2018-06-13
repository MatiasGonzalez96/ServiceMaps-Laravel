var map;

function initMap()
{
	var latitud = $('#latitud').val();
	var longitud = $('#longitud').val();
	var pos = new google.maps.LatLng(latitud, longitud);

	map = new google.maps.Map(document.getElementById('map'), {
	  	zoom: 15,
	  	center: pos,
        disableDoubleClickZoom: true,
		draggable: false,
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

	crearMarcador(pos);
}

function crearMarcador(pos)
{
    var marker = new google.maps.Marker({
        position: pos,
		animation: google.maps.Animation.DROP,
        map: map
    });

	var contenido ="<span id='etiquetaInfoWindow'>"+$('#nombre').val()+"</span>";

	var infowindow = new google.maps.InfoWindow({
      	content: contenido
    });

	marker.addListener('mouseover', function() {
      	infowindow.open(map, marker);
    });

	marker.addListener('mouseout', function() {
      	infowindow.close();
    });
}
