$(function()
{
	$("#botonEliminar").click(function()
	{
        swal({
          title: "¿Está seguro?",
          text: "¡Una vez eliminado, no podrá recuperar el servicio!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("¡Servicio eliminado correctamente!", {
              icon: "success",
            });
            document.deleteForm.submit();
          }
        });
	});
});
