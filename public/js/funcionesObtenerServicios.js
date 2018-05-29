var servicios;


$.get("./api/servicios", function(data, status)
{
    servicios = data;
});
