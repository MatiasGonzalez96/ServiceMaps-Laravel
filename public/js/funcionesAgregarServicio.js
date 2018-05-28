$(function()
{
    $("#linkInicio").click(function()
    {
        window.location.href = "/";
    });
});

$(function()
{
    $("#botonAgregarServicio").click(function()
    {
        if (validarCampos())
        {
            //agregar servicio
            resetearCampos();
            swal("¡Buen trabajo!", "Servicio cargado correctamente", "success");
        }
        else
        {
            swal("No se pudo cargar el servicio", "¡Debe completar todos los campos!", "error");
        }
    });
});

function validarCampos()
{
    let nombre = $('#nombreServicio').val();
    let direccion = $('#direccionServicio').val();
    let telefono = $('#telefonoServicio').val();
    let pagina = $('paginaServicio').val();
    let imagen = $('#imagenServicio').val();
    if (nombre != "" && direccion != "" && telefono != "" && pagina != "" && imagen != "")
    {
        return true;
    }
    return false;
}

function resetearCampos()
{
    $('#nombreServicio').val("");
    $('#direccionServicio').val("");
    $('#telefonoServicio').val("");
    $('#paginaServicio').val("");
    $('#imagenServicio').val("");
}
