

$(document).ready(function () {

    // $('#table-lista__proformas').DataTable();

    $(document).on('click', '.buscar-boleta__btn', function () {
        console.log('entro')
        tableFactura.ajax.reload()
    })

    var tableFactura = $('#table-lista__boletas').DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        bFilter: false,
        scrollX: true,
        ajax: {
            "url": `${window.location.origin}/joyeriaADs/obtenerDatos/obtenerBoleta.php`,
            "type": "POST",
            "data": function (d) {
                d.accion = "boleta_listar"
                d.numero = $(".buscar-boleta__numero").val()
                d.dni = $(".buscar-boleta__dni").val()
                d.desde = $('.buscar-boleta__fecha-desde').val()
                d.hasta = $(".buscar-boleta__fecha-hasta").val()
            },
            dataSrc: function (json) {
                console.log(json)
                let data = json.data

                data.forEach((item, index) => {
                    json.data[index].indexs = index + 1
                })

                return json.data
            }
        },
        columnDefs: [
            {
                targets: 0,
                data: null,
                render: function (data, type, full, meta) {

                    return `${data.indexs}`;

                }
            },
            {
                targets: 1,
                data: null,
                render: function (data, type, full, meta) {
                    return `${data.id}`
                }
            },
            {
                targets: 2,
                data: null,
                render: function (data, type, full, meta) {
                    return `${data.fecha}`
                }
            },
            {
                targets: 3,
                data: null,
                render: function (data, type, full, meta) {
                    return `${data.cliente}`
                }
            },
            {
                targets: 4,
                data: null,
                render: function (data, type, full, meta) {
                    let html = `
                        <div class=" ${ data.garantia != 'Con Garantía'? 'text-warning' : 'text-success' } ">
                            ${data.garantia}
                        </div>
                    `
                    return `${html}`
                }
            },
            {
                targets: 5,
                data: null,
                render: function (data, type, full, meta) {
                    let html = `
                    
                    <a href="/joyeriaADs/obtenerDatos/obtenerReclamo.php?accion=reclamo&id=${data.id}" class="btn btn-primary">
                        <i class="fa fa-times" aria-hidden="true"></i> Generar Reclamo
                    </a>
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


    // $(document).on('click', '.btn-mostrar__detalle-proforma', function () {
    //     rellenarListaTablasProductosSinAcciones($(this).data('valor'), 'tbody-lista__productos')
    //     $('#mostrarDetalle').show()
    // })


    // $(document).on('click', '.btn-delete__proforma', function (e) {
    //     e.preventDefault();
    //     ajax('Proforma', { accion: 'proforma_eliminar', id: $(this).data('id') }, () => {
    //         tableFactura.ajax.reload()
    //     })
    // })

})