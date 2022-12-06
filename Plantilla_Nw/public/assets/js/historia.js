$(function () {
    $("#formulario_paciente").submit(function () {
      var datos = $(this).serialize();
      var url = $(this).attr("action");
      $.post(url, datos, function (e) {
        Swal.fire(
          e.mensaje,
          '',
          e.icono
        )
        $("#formulario_paciente").trigger("reset");
        list();
      }, 'JSON');
  
      return false;
  
  
  
    });
    

})