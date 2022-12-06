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
        list();
      }, 'JSON');
  
      return false;
  
  
  
    });

    $("#formulario_e_usuarios").submit(function () {
      var datos = $(this).serialize();
      var url = $(this).attr("action");
      $.post(url, datos, function (e) {
        Swal.fire(
          
        )
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
    
      function list(){
        url="/listado_usuarios";
        $.get(url,"", function (e) {
          $("#list_u").html(e.mensaje)
        }, 'JSON');
      }
    
    $(document).ready(function(){
      list();
    });

    $(document).on('click', '.edit_u', function (e) {
      var url = $(this).attr("href");
      var elemento = $(this);
          $.get(url, '', function (e) {
            $("#formulario_e_usuarios").html(e.mensaje)
          }, 'JSON');
          

      return false;
    });
    

})