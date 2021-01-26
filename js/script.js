
// window.addEventListener("load", function (event) {
//     let btnDropdown = document.querySelector('.btn-drowpn__title')
//     let btnDropdownDescription = document.querySelector('.btn-drowpn__description')

//     btnDropdown.addEventListener('click', function () {
//         btnDropdownDescription.classList.toggle('show')
//     })
// });

function ajax( tipoData,data, callBackSucces = null, callBackError = null, mensajeSuccess = { valor : true, toast : true }, mensajeError = { valor : true, toast : true } ) {
  $.ajax({
      url: `${window.location.origin}/joyeriaADs/obtenerDatos/obtener${tipoData}.php`,
      type: "POST",
      data: data,
      success: function (res) {

          let data = null
          if (typeof res == 'object') {
              data = res
          } else {
              data = JSON.parse(res)
          }
          if ( data.resultado ) {

              if (callBackSucces && typeof callBackSucces == 'function') 
                  callBackSucces( data.data )
              else
                alerta.mensajeCorrecto( { title:'Correcto', text : data.msg  } )

              
              if( mensajeSuccess.valor && mensajeSuccess.toast ) 
                  alerta.mensajeCorrectoToast({ icon : 'success', title : data.msg })
                
            
          } else {

              if (callBackError && typeof callBackSucces == 'function') 
                  callBackError()
                  
              
              if( mensajeError.valor && mensajeError.toast) 
                alerta.mensajeCorrectoToast({ icon : 'error', title : data.msg })
              else
                alerta.mensajeError( { title:'Error', text : data.msg  } )

          }
      }
  });
}

function ajaxApi(data, callBackSucces = null) {
  $.ajax({
      url: `https://dni.optimizeperu.com/api/persons/${data}`,
      success: function (res) {
          if (callBackSucces && typeof callBackSucces == 'function') {
              callBackSucces(res)
          }
      }
  });
}

function rellenarListaTablasProductos( data, _clase ) {

    let html = ``

    data.forEach( ( item, index ) => {
        html += `
            <tr>
                <td scope="col" data-sort="name" class="sort">${index+1}</th>
                <td scope="col" data-sort="name" class="sort">${item.nombre}</th>
                <td scope="col" data-sort="budget" class="sort">${item.descripcion}</th>
                <td scope="col" data-sort="status" class="sort">${item.cantidad}</th>
                <td scope="col" data-sort="status" class="sort">${item.precio}</th>
                <td scope="col" data-sort="status" class="sort">${item.total}</th>
                <th scope="col">
                    <button type="button" class="btn btn-light btn-delete__producto" data-producto='${ JSON.stringify( item ) }' data-index="${index}">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </th>
            </tr>
        `
    } )

    $(`.${_clase}`).html( html )

}

function rellenarListaTablasProductosSinAcciones( data, _clase ) {

    let html = ``

    data.forEach( ( item, index ) => {
        html += `
            <tr>
                <td scope="col" data-sort="name" class="sort">${index+1}</th>
                <td scope="col" data-sort="name" class="sort">${item.nombre}</th>
                <td scope="col" data-sort="budget" class="sort">${item.descripcion}</th>
                <td scope="col" data-sort="status" class="sort">${item.cantidad}</th>
                <td scope="col" data-sort="status" class="sort">${item.precio}</th>
                <td scope="col" data-sort="status" class="sort">${item.total}</th>
            </tr>
        `
    } )

    $(`.${_clase}`).html( html )

}

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
    $(document).on('click', '.btn-add__cliente', function(){
      $('.div-add__cliente').toggleClass('d-none')
    })
});