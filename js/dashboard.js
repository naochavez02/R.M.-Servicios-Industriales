function guardarNuevaSolicitud() {
  // Lógica para guardar la solicitud (puedes ajustar según tus necesidades)
  console.log('Guardando solicitud...');
  
  // Mostrar notificación de éxito
  alert('Los datos se han guardado exitosamente.');

  // Cerrar el modal después de guardar
  $('#nuevaSolicitudModal').modal('hide');
}

//Script para manejar la lista de archivos -->
$(document).ready(function() {
        // Escucha el evento de cambio en el input de archivos
        $('#adjuntos').change(function() {
            // Obtén la lista de archivos seleccionados
            var archivosSeleccionados = $('#adjuntosContainer input:file')[0].files;


            // Actualiza la lista en el contenedor
            var listaArchivos = $('#listaArchivos');

            // Agrega cada archivo a la lista
            for (var i = 0; i < archivosSeleccionados.length; i++) {
              var nuevoArchivo = $('<li>').text(archivosSeleccionados[i].name);
              
              // Crear un icono de bote de basura con Bootstrap
              var iconoBoteBasura = $('<i>').addClass('fas fa-trash-alt');
              
              // Crear el botón con el icono
              var botonEliminar = $('<button>').addClass('btn btn-link text-danger').append(iconoBoteBasura).click(eliminarArchivo);
              
              nuevoArchivo.append(botonEliminar); 
              listaArchivos.append(nuevoArchivo);
          } 
        });
    });
 

    function eliminarArchivo() {
      // Eliminar el archivo de la lista al hacer clic en el botón X
      $(this).parent().remove();
      $('#adjuntosContainer input:file').val('');
    }
    
    function limpiarCampos() {
      // Limpiar todos los campos del formulario al cerrar el modal
      $('#nombre').val('');
      $('#descripcion').val(''); 
      $('#adjuntosContainer input:file').val('');
      // Limpiar la lista de archivos
      $('#listaArchivos').empty(); 
    }