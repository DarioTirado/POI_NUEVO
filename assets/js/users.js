$(document).ready(function () {

  if ($('#search_btn').length) {
    $('#search_btn').click(function () {
      const id = $('#search').val();
      const action = 'busquedatal';
    var datacontact="";
 
      $.ajax({
        url: 'users.php',
        type: "POST",
        async: true,
        data: {
          action_c: action,
          nombre:id,
        },
        beforeSend: function () {

        },
        success: function (response) {
          console.log(response);
            if(response == 'notData'){
                        datacontact = "No se encontro el curso deseado";
                        alert("No se encontro el curso deseado")
                        }else{
    
                        const info = $.parseJSON(response);
                        console.log(info);
                      datacontact = info;
                      $('#contact_Name').html(datacontact.nombre);
                      $('#sender_Name').html(datacontact.nombre);
                      datacontact= `
                      <div id="MSG_Container" style="height: 444px;">
                      <div id="contacto_info"><img class="rounded-circle" id="contact_IMG" src="assets/img/278003BE-83E6-43AD-AD3D-7956669B67D0.jpg" width="73" height="70">
                         <h3 id="contact_Name">${info.nombre}</h3>
                         <p class="lead" id="msg">Mensaje</p>
                     </div>`;

                      
                  //    $('#contacto_info').html(datacontact);

                        }
                      },
        error: function(error) {
          console.log(error);
        }
      });
    });
  }




  
});

/*
function searchMessages() {
  const searchTerm = $('#search').val();
  if (searchTerm.length > 3) { // Solo busca si se han ingresado al menos 3 caracteres
    $.ajax({
      url: 'users.php',
      type: 'GET',
      data: {q: searchTerm},
      dataType: 'json',
      success: function(results) {
        const resultsContainer = $('#');
        resultsContainer.empty(); // Limpia los resultados anteriores
        if (results.length > 0) {
          $.each(results, function(index, result) {
          alert("estoy buscando");
          });
        } else {
          const noResultsElement = $('<div>No se encontraron resultados</div>');
          resultsContainer.append(noResultsElement);
        }
      },
      error: function(xhr, status, error) {
        console.log('Error: ' + error);
      }
    });
  }

}

// Escucha el evento de teclado en la barra de búsqueda
$('#search').keyup(searchMessages);
  */
