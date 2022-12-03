$(function () {
    $("#formulario_usuarios").submit(function () {
      var datos = $(this).serialize();
      var url = $(this).attr("action");
      $.post(url, datos, function (e) {
        Swal.fire(
          e.mensaje,
          '',
          e.icono
        )
        $("#formulario_usuarios").trigger("reset");
  
      }, 'JSON');
  
      return false;
  
  
  
    });

    $("#uno").submit(function () {
          Swal.fire(
            'hola',
            '',
            'success'
          )

          return false;
          
    
        });
    
      
    
    $(document).ready(function(){
      $("#list_users").html("<livewire:usuarios-list>")

    });
    

})