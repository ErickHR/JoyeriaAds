

$(document).ready(function () {

    // $('#table-lista__proformas').DataTable();

    $(document).on('click', '.buscar-proforma__btn', function(){
        tableFactura.ajax.reload()
    })

    var tableFactura = $('#table-lista__proformas').DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        bFilter: false,
        scrollX: true,
        ajax: {
            "url": `${window.location.origin}/joyeriaADs/obtenerDatos/obtenerProforma.php`,
            "type": "POST",
            "data": function (d) {
                d.accion = "proforma_listar"
                d.numero = $(".buscar-proforma__numero").val()
                d.dni = $(".buscar-proforma__dni").val()
                d.desde = $('.buscar-proforma__fecha-desde').val()
                d.hasta = $(".buscar-proforma__fecha-hasta").val()
            },
            dataSrc :  function(json){
                console.log(json)
                let data = json.data

                data.forEach( (item, index) => {
                    json.data[index].indexs = index+1
                } )

                return json.data
            }
        },
        columnDefs: [
            {
                targets: 6,
                data: null,
                render: function(data, type, full, meta){
                    let html = `
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light btn-drowpn__title" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow btn-drowpn__description" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-161px, -51px, 0px);">
                            <a class="dropdown-item" href="/joyeriaADs/obtenerDatos/obtenerBoleta.php?accion=boleta&id=${data.idproforma}"> <i class="fa fa-print" aria-hidden="true"></i> Generar Boleta</a>
                            <a class="dropdown-item btn-delete__proforma" href="#" data-id="${data.idproforma}"> <i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                        </div>
                    </div>
                    `
                    return `${html}`
                    // var menu = "<ul id='popover-content' class='list-group'>"
                    // // var menu = ''
                    // menu += "<a class='a__editar-factura list-group-item' data-id='" + data.id + "'><i class='fa fa-pencil' aria-hidden='true'></i> EDITAR </a>";
                    // menu += "<a class='a__eliminar-factura list-group-item' data-id='" + data.id + "'><i class='fa fa-ban' aria-hidden='true'></i> ELIMINAR </a>";
                    // // return menu;
                    // menu += "</ul>";
                    // return '<a tabindex="1"' +
                    //     'class="btn btn-primary popoverCP" role="button" data-html="true" data-toggle="popover" data-trigger="focus" title="OPCIONES"' +
                    //     'data-content="' + menu + '" data-placement="left"><i class="fa fa-bars" aria-hidden="true"></i></a>';

                }
            },
            {
                targets: 0,
                data: null,
                render: function(data, type, full, meta){

                    return `${data.indexs}`;

                }
            },
            {
                targets: 1,
                data: null,
                render: function(data, type, full, meta){
                    return `${data.fecha}`
                }
            },
            {
                targets: 2,
                data: null,
                render: function(data, type, full, meta){
                    return `${data.idproforma}`
                }
            },
            {
                targets: 3,
                data: null,
                render: function(data, type, full, meta){
                    return `${data.cliente}`
                }
            },
            {
                targets: 4,
                data: null,
                render: function(data, type, full, meta){
                    let html = `
                        <button type="button" class="btn btn-mostrar__detalle-proforma" data-toggle="modal" data-target="#mostrarDetalle" data-valor='${data.detal_proforma}'>
                            <i class="fa fa-eye" aria-hidden="true"></i> <span class="badge badge-primary"> Mostrar </span>
                        </button>
                    `
                    return `${html}`
                }
            },
            {
                targets: 5,
                data: null,
                render: function(data, type, full, meta){
                    return `${data.total}`
                }
            }

        ],
        language: {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontro registros",
            "info": "Pagina _PAGE_ de _PAGES_ <br>Total de registros: _MAX_",
            "infoEmpty": "No se encontro registros",
            "infoFiltered": ""
        }
    });


    $(document).on('click', '.btn-mostrar__detalle-proforma', function () {
        rellenarListaTablasProductosSinAcciones( $(this).data('valor'), 'tbody-lista__productos' )
        $('#mostrarDetalle').show()
        // $('#myInput').trigger('focus')
      })

    //   $('#myModal').on('shown.bs.modal', function () {
    //     $('#myInput').trigger('focus')
    //   })

    $( document ).on('click', '.btn-delete__proforma', function( e ) {
        e.preventDefault();
        ajax( 'Proforma', { accion : 'proforma_eliminar', id : $(this).data('id') }, ()=>{
            tableFactura.ajax.reload()
        } )
    })

})