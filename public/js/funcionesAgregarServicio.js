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
        validateForm();
    });
});

function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
