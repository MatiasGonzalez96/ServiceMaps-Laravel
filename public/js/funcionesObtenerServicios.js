var servicios;

$(function()
{
    $.ajax({
        url: "/servicios",
        context: document.body,
        success: function (data)
        {
            servicios = data;
            alert(servicios);
        }
    });
});
