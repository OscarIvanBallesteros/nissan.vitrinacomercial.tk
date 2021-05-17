$(document).ready(function () {
  $(".formcont").bind("submit", function () {
    $.ajax({
        type: $(this).attr("method"),
        url: $(this).attr("action"),
        data: $(this).serialize();
        success: function(){
            $("#alerta").removeClass("hide").addClass("alert-success");
            $(".respuesta").html("Enviado!");
            $(".mensaler").html("El mensaje ha sido enviado correctamente")
        },
        error: function() {
            alert("Error en el envío");
        }
    });
    return false;
  });
  
});
