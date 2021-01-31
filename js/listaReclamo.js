

$(document).ready(function () {

    $(document).on('click', '.buscar-proforma__btn', function(){
        tableFactura.ajax.reload()
    })

    var tableFactura = $('#tabla-lista__reclamos').DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        bFilter: false,
        scrollX: true,
        ajax: {
            "url": `${window.location.origin}/joyeriaADs/obtenerDatos/obtenerReclamo.php`,
            "type": "POST",
            "data": function (d) {
                d.accion = "reclamo_listar"
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
                targets: 5,
                data: null,
                render: function(data, type, full, meta){
                    let html = `
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light btn-drowpn__title" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow btn-drowpn__description" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-161px, -51px, 0px);">
                                <a class="dropdown-item" href="#">Entregado</a>
                                <a class="dropdown-item" href="#">ContraTiempo</a>
                                <a class="dropdown-item" href="#">Cancelado</a>
                            </div>
                        </div>
                    `
                    return `${html}`

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
                    return `${data.nombre}`
                }
            },
            {
                targets: 2,
                data: null,
                render: function(data, type, full, meta){
                    return `${data.categoria}`
                }
            },
            {
                targets: 3,
                data: null,
                render: function(data, type, full, meta){
                    console.log(data)
                    return `${data.detalle}`
                }
            },
            {
                targets: 4,
                data: null,
                render: function(data, type, full, meta){
                    let html = `
                    <div class="badge badge-pill badge-primary">DESTINATARIO</div>
                    `
                    return `${html}`
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


})