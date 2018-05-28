var servicios;

$.get("./api/servicios", function(data, status)
{
    servicios = data;
    alert(servicios[0].nombre);
});
