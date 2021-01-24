

$(document).ready(function () {

    // $('#table-lista__proformas').DataTable();

    $(document).on('click', '.buscar-proforma__btn', function(){
        tableFactura.ajax.reload()
    })

    var tableFactura = $('#table-lista__proformas').DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        bFilter:false,
        scrollX: true,
        ajax: {
            "url": `${window.location.origin}/joyeriaADs/obtenerDatos/obtenerProforma.php`,
            "type": "POST",
            "data": function (d) {
                d.accion ="listar_proforma"
                d.numero ="buscar-proforma__numero"
                d.dni ="buscar-proforma__dni"
                d.desde ="buscar-proforma__fecha-desde"
                d.hasta ="buscar-proforma__fecha-hasta"
            },
            dataSrc :  function(json){

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
                    return ``
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
                    console.log( JSON.parse(data.detal_proforma) )
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

})