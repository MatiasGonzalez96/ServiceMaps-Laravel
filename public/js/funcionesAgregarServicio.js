var servicios;

$(function()
{
    $("#linkInicio").click(function()
    {
        window.location.href = "/";
    });
});

$(function()
{
    $.get("./api/servicios", function(data, status)
    {
        servicios = data;
    });
});

$(function()
{
    $("#botonAgregarServicio").click(function()
    {
        if (!hayCamposVacios())
        {
            if (!hayCamposRepetidos())
            {
                agregarServicio();
                resetearCampos();
                eliminarMarcador();
                swal("¡Buen trabajo!", "Servicio cargado correctamente", "success");
            }
        }
        else
        {
            swal("No se pudo cargar el servicio", "¡Debe completar todos los campos!", "error");
        }
    });
});

function hayCamposVacios()
{
    let nombre = $('#nombreServicio').val();
    let direccion = $('#direccionServicio').val();
    let telefono = $('#telefonoServicio').val();
    let pagina = $('paginaServicio').val();
    if (nombre != "" && direccion != "" && telefono != "" && pagina != "")
    {
        return false;
    }
    return true;
}

function resetearCampos()
{
    $('#nombreServicio').val("");
    $('#direccionServicio').val("");
    $('#telefonoServicio').val("");
    $('#paginaServicio').val("");
}

function hayCamposRepetidos()
{
    let nombre = $('#nombreServicio').val();
    let direccion = $('#direccionServicio').val();

    for (i = 0; i < servicios.length; i++)
    {
        if (String(nombre.toLowerCase()) == String(servicios[i].nombre.toLowerCase()))
        {
            swal("No se pudo cargar el servicio", "El nombre ya está en uso", "error");
            return true;
        }
        else
        {
            if (String(direccion.toLowerCase()) == String(servicios[i].direccion.toLowerCase()))
            {
                swal("No se pudo cargar el servicio", "La ubicación ya está en uso", "error");
                return true;
            }
        }
    }
    return false;
}

function agregarServicio()
{
    let nom = $('#nombreServicio').val();
    let idServicio = obtenerId(nombre);
    let dir = $('#direccionServicio').val();
    let tel = $('#telefonoServicio').val();
    let web = $('#paginaServicio').val();
    let type = $('#tipoServicio').val();
    let hor = $('#horarioServicio').val();
    let lat = obtenerLatitud();
    let lng = obtenerLongitud();
    let img = obtenerImagen(tipo);

    $.ajax
    ({
        url: '/api/servicio',
        type: 'POST',
        data: JSON.stringify({
            id: idServicio,
            nombre: nom,
            direccion: dir,
            telefono: tel,
            sitioweb: web,
            tipo: type,
            horario: hor,
            latitud: lat,
            longitud: lng,
            imagen: img
        }),
        contentType: "application/json",
        dataType: "json",
        success: function ()
        {
            console.log("Servicio agregado con exito");
        },
        error: function (data)
        {
            console.log("Error al agregar el servicio");
        }
    });
}

function obtenerId(nombre)
{
    var cadena = String(nombre.toLowerCase());
    var id = cadena.replace(/\s+/gi,'');
    return id;
}

function obtenerImagen(tipo)
{
    var img;
    switch(tipo)
    {
        case "Gomería":
            img = "gomeria.jpg";
            break;
        case "Taller Mecánico":
            img = "tallerMecanico.png";
            break;
        case "Estación de Servicio":
            img = "estacionServicio.jpg";
            break;
        default:
    }
    return img;
}
