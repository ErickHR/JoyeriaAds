let producto = null
let cliente = null

function rellenarTablasProductos( data, _clase ) {

    let html = ``

    data.forEach( ( item, index ) => {
        html += `
        <tr>
            <th scope="row">
                ${ item.cod_producto }
            </th>
            <td>
                ${ item.nombre }
            </td>
            <td>
                <button class="btn btn-ligth bg-secondary btn-choose__producto" data-valor='${ JSON.stringify( item ) }'><i class="fa fa-plus" aria-hidden="true"></i> </button>
            </td>
        </tr>
        `
    } )

    $(`.${_clase}`).html( html )

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

$(document).ready(function () {

    $(document).on('keyup', '.form-create__input-dni', function () {
        let valor = $(this).val()
        if (valor.length == 8 && !isNaN( valor )) {
            let data = {
                accion: 'obtenerCliente',
                dni: valor
            }
            ajax( 'Cliente', data, (data) => {
                $('.form-create__cite-nombre').html(`<cite title="Nombre del cliente y/o empresa">${data[0].nombreCompleto}</cite>`)
                $('.form-create__div-mostrar-nombre').show()
                cliente = data[0].idcliente
            }, () => {

                $('.btn-search__cliente').hide()
                $('.btn-add__cliente').show()

                ajaxApi(valor, (data) => {
                    $('.form-create__cite-nombre').html(`<cite title="Nombre del cliente y/o empresa">${data.first_name + ' ' + data.last_name + ', ' + data.name}</cite>`)
                    $('.form-create__div-mostrar-nombre').show()
                    $('.form-cliente__dni').val(data.dni)
                    $('.form-cliente__paterno').val(data.first_name)
                    $('.form-cliente__materno').val(data.last_name)
                    $('.form-cliente__nombre').val(data.name)
                    $('.btn-add__cliente').trigger('click')
                })
            })
        }
    })

    $(document).on('click', '.btn-add__cliente', function () {
        $('.div-add__cliente').toggleClass('d-none')
    })

    $(document).on('submit', '.form-create__cliente', function ( e ) {
        e.preventDefault(); 
        let formData = $( this ).serialize() + `&accion=agregar_cliente`
        ajax( 'Cliente', formData, ( data ) => {
            cliente = data
            $('.btn-add__cliente').trigger('click')
        } )

    })

    $(document).on('click', '.btn-search__producto', function(){
        ajax( 'Producto', {accion : 'buscar_producto_todos' }, ( data ) => {
            console.log(data)
            rellenarTablasProductos( data, 'tbody-mostrar__producto' )
            $('.div-mostrar__producto').show()
        } )
    })

    $(document).on('click', '.btn-choose__producto', function(){
        let jsons =  $(this).data('valor')
        producto = {...jsons}
        $('.input-mostrar__producto').val( jsons.cod_producto )
        $('.div-mostrar__producto').hide()
        // console.log( tr.Event )
        // console.log( $(this).parent() )
        // let trs = $(this).parent()
        // let childrenTrs = trs.context.children
        // let idos = childrenTrs[0].children[0].value
        // console.log(idos)
        // ajax( 'Producto', {accion : 'buscar_producto_todos' }, ( data ) => {
        //     console.log(data)
        //     rellenarTablasProductos( data, 'tbody-mostrar__producto' )
        //     $('.div-mostrar__producto').show()
        // } )
    }) 
    
    $(document).on('click', '.btn-save__producto', function(){
        let data = {...producto}
        data.accion = 'guardar_session_producto'
        data.cantidad = $( '.input-cantidad__producto' ).val()
        ajax( 'Producto', data, ( data ) => {
            rellenarListaTablasProductos( data, 'tbody-lista__productos' )
        } )
    })

    $(document).on( 'click', '.btn-delete__producto', function(){
        let producto = $(this).data('producto')
        let index = $(this).data('index')
        let data = {...producto}
        data.accion = 'borrar_session_producto'
        data.index = $(this).data('index')
        ajax( 'Producto', data, ( data ) => {
            rellenarListaTablasProductos( data, 'tbody-lista__productos' )
        } )
    } )

    $(document).on('click', '.btn-form-registrar__proforma', function(){
        let data = {}
        data.cliente = {...cliente}
        data.accion = 'registrar_proforma'
        ajax( 'Proforma', data)
    })

});