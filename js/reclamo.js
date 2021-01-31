
function rellenarListaTablasProductosSeisColumnas( _clase, data  ) {

    let html = ``

    data.forEach( ( item, index ) => {
        html += `
            <tr>
                <td scope="col" data-sort="name" class="sort">${index+1}</th>
                <td scope="col" data-sort="name" class="sort">${item.producto.nombre}</th>
                <td scope="col" data-sort="budget" class="sort">${item.categoria}</th>
                <td scope="col" data-sort="status" class="sort">${item.detalle}</th>
                <th scope="col">
                    <button type="button" class="btn btn-light btn-delete__producto" data-id="${item.producto.idProducto}">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </th>
            </tr>
        `
    } )

    $(`.${_clase}`).html( html )

}

$(document).ready(function () {


    $(document).on('click', '.form-btn__reclamos', function () {
        console.log('entro')

        if( !$('.form-ta__detalle').val() ) {
            alerta.mensajeError( { title:'Error', text : 'Coloque el detalle'  } )
        } 

        let data = {
            accion : 'producto_agregar_session_reclamo',
            id : $('.form-select__lista-productos').val(),
            categoria : $('input:radio[name=form-rb__agregar]:checked').val(),
            detalle : $('.form-ta__detalle').val()
        }

        ajax( 'Producto', data, ( data ) => {
            
            rellenarListaTablasProductosSeisColumnas( 'tabla__productos', data )
            
        } )
        // $('.div-add__cliente').toggleClass('d-none')
    })

    $(document).on('click', '.btn-delete__producto', function () {
        let data = {
            accion : 'producto_eliminar_session_reclamo',
            idProducto : $(this).data('id'),
        }

        ajax( 'Producto', data, ( data ) => {
            
            rellenarListaTablasProductosSeisColumnas( 'tabla__productos', data )
            
        } )
    } )

    $(document).on('click', '.form-btn__guardar', function() {
        ajax( 'Reclamo', { accion : 'reclamo_guardar' }, ( data ) => {
            
            setTimeout( () => {
                window.location.href = 'http://localhost/joyeriaADs/obtenerDatos/obtenerBoleta.php?accion=listaboleta'
            }, 2000 )
            
        } )
    })

});