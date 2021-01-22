<?php

class formProforma
{

    public function formProformaShow()
    {
?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="./styles/argon.css">
            <link rel="stylesheet" href="./styles/nucleo.css">
            <link rel="stylesheet" href="./styles/style.css">

            <title>bienvenida</title>
        </head>

        <body class="overflow-hidden">
            <div id="app">
                <div class="w-100 position-relative">
                    <div id="origin" class="z-index-9 origin position-absolute left-0 top-0 w-100">
                        <div class="grid-panel">
                            <div>
                                <nav class="navbar p-1 navbar-horizontal navbar-expand-lg navbar-dark bg-red">
                                    <div class="container">
                                        <div class="d-flex justify-content-between align-items-center"><img src="/img/logo_blanco.png" alt="logo" class="pl-3 pr-3" style="width: 60px;">
                                            <div class="navbar-brand text-white">Envios</div>
                                        </div> <button type="button" data-toggle="collapse" data-target="#navbar-success" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                                        <div id="navbar-success" class="collapse navbar-collapse">
                                            <div class="navbar-collapse-header">
                                                <div class="row">
                                                    <div class="col-6 collapse-brand"><a href="../../index.html"><img src="https://shalom.pe/images/logo_shalom.png"></a></div>
                                                    <div class="col-6 collapse-close"><button type="button" data-toggle="collapse" data-target="#navbar-success" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span> <span></span></button></div>
                                                </div>
                                            </div>
                                            <ul class="navbar-nav ml-lg-auto">
                                                <li class="nav-item dropdown"><a href="#/clientes" id="navbar-default_dropdown_8" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link nav-link-icon"><span class="">Operaciones</span></a>
                                                    <div class="historial dropdown-menu dropdown-menu-xl dropdown-menu-left py-0">
                                                        <div class="px-3 py-3"></div>
                                                        <div class="list-group list-group-flush"><a href="#/envios" class="list-group-item list-group-item-action">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto icons"><i class="fas fa-paper-plane"></i></div>
                                                                    <div class="col ml--2">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div>
                                                                                <h4 class="mb-0 text-sm">Cotización</h4>
                                                                            </div>
                                                                        </div>
                                                                        <p class="text-sm mb-0">Programa tus envios.</p>
                                                                    </div>
                                                                </div>
                                                            </a> <a href="#/solicitud/pendientes" class="list-group-item list-group-item-action">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto icons"><i class="fas fa-chalkboard-teacher"></i></div>
                                                                    <div class="col ml--2">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div>
                                                                                <h4 class="mb-0 text-sm">Mis envíos pendientes</h4>
                                                                            </div>
                                                                        </div>
                                                                        <p class="text-sm mb-0">Envíos solicitados.</p>
                                                                    </div>
                                                                </div>
                                                            </a> <a href="#/solicitud/rastreo" class="list-group-item list-group-item-action">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto icons"><i class="fas fa-map-marker-alt"></i></div>
                                                                    <div class="col ml--2">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div>
                                                                                <h4 class="mb-0 text-sm">Rastreo de envíos</h4>
                                                                            </div>
                                                                        </div>
                                                                        <p class="text-sm mb-0">Envíos en proceso de entrega.</p>
                                                                    </div>
                                                                </div>
                                                            </a> <a href="#/historial/envios" class="list-group-item list-group-item-action">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto icons"><i class="fas fa-history"></i></div>
                                                                    <div class="col ml--2">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div>
                                                                                <h4 class="mb-0 text-sm">Historial de envíos</h4>
                                                                            </div>
                                                                        </div>
                                                                        <p class="text-sm mb-0">Historial de envíos entregados.</p>
                                                                    </div>
                                                                </div>
                                                            </a> <a href="#/comprobantes" class="list-group-item list-group-item-action">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto icons"><i class="fas fa-file-invoice-dollar"></i></div>
                                                                    <div class="col ml--2">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div>
                                                                                <h4 class="mb-0 text-sm">Comprobantes</h4>
                                                                            </div>
                                                                        </div>
                                                                        <p class="text-sm mb-0">Visualiza tus comprobantes de pago.</p>
                                                                    </div>
                                                                </div>
                                                            </a></div> <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3"></a>
                                                    </div>
                                                </li>
                                                <li class="nav-item dropdown"><a href="#/clientes" id="navbar-default_dropdown_9" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link nav-link-icon"><span class="nav-link-inner--text small">Mantenimiento</span></a>
                                                    <div class="historial dropdown-menu dropdown-menu-xl dropdown-menu-left py-0">
                                                        <div class="px-3 py-3"></div>
                                                        <div class="list-group list-group-flush"><a href="#/clientes" class="list-group-item list-group-item-action">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto icons"><i class="fas fa-user-friends"></i></div>
                                                                    <div class="col ml--2">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div>
                                                                                <h4 class="mb-0 text-sm">Clientes</h4>
                                                                            </div>
                                                                        </div>
                                                                        <p class="text-sm mb-0">Registra a tus clientes frecuentes.</p>
                                                                    </div>
                                                                </div>
                                                            </a> <a href="#/empresas" class="list-group-item list-group-item-action">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto icons"><i class="fas fa-building"></i></div>
                                                                    <div class="col ml--2">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div>
                                                                                <h4 class="mb-0 text-sm">Empresas</h4>
                                                                            </div>
                                                                        </div>
                                                                        <p class="text-sm mb-0">Registra a las empresas frecuentes.</p>
                                                                    </div>
                                                                </div>
                                                            </a></div> <a href="#" class="dropdown-item text-left text-primary font-weight-bold py-3 pl-3">Cerrar sesión</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <!-- <div class=" "> -->
                            <div class="vh-100 overflow-scroll shadow pb-4">
                                <div id="envioSeguimientoList" class=" bg-base-plomo">
                                    <div class="shadow ">
                                        <div class="p-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="list-group list-group-flush ">
                                                                <div class="form-group focused">
                                                                    <label class="form-control-label" for="input-name">DNI</label>
                                                                    <div class="input-group input-group-alternative">
                                                                        <input class="form-control form-control-alternative bg-secondary form-create__input-dni" placeholder="DNI" type="text">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text bg-secondary cursor-pointer btn-search__cliente"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                                            <span class="input-group-text bg-secondary cursor-pointer btn-add__cliente" style="display: none;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-create__div-mostrar-nombre" style="display: none;">
                                                                        <div class="d-flex">
                                                                            <label class="form-control-label" for="input-name">NOMBRE: </label>
                                                                            <div class="form-create__cite-nombre">
                                                                                <cite title="Nombre del cliente y/o empresa">Huarancca Rivas, Isaac Erick</cite>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row div-add__cliente d-none">
                                                        <div class="col-12">
                                                            <div class="d-flex">
                                                                <div class="card mx-auto">
                                                                    <form action="" method="post" class="form-create__cliente" id="form-create__cliente">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-6">
                                                                                    <div class="list-group list-group-flush ">
                                                                                        <div class="form-group focused">
                                                                                            <label class="form-control-label" for="input-name">DNI</label>
                                                                                            <input class="form-control form-control-alternative bg-secondary form-cliente__dni" name="dni" placeholder="DNI" type="NUMBER">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="list-group list-group-flush ">
                                                                                        <div class="form-group focused">
                                                                                            <label class="form-control-label" for="input-name">NOMBRE</label>
                                                                                            <input class="form-control form-control-alternative bg-secondary form-cliente__nombre" name="nombre" placeholder="NOMBRE" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-6">
                                                                                    <div class="list-group list-group-flush ">
                                                                                        <div class="form-group focused">
                                                                                            <label class="form-control-label" for="input-name">APELLIDO PATERNO</label>
                                                                                            <input class="form-control form-control-alternative bg-secondary form-cliente__paterno" name="paterno" placeholder="APELLIDO PATERNO" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="list-group list-group-flush ">
                                                                                        <div class="form-group focused">
                                                                                            <label class="form-control-label" for="input-name">APELLIDO MATERNO</label>
                                                                                            <input class="form-control form-control-alternative bg-secondary form-cliente__materno" name="materno" placeholder="APELLIDO MATERNO" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <label class="form-control-label" for="input-name">UBIGEO</label>
                                                                                <div class="col-12 col-sm-4 col-md-4">
                                                                                    <div class="list-group list-group-flush ">
                                                                                        <div class="form-group focused">
                                                                                            <label class="form-control-label" for="input-name">DEPARTAMENTO</label>
                                                                                            <select name="" class="form-control form-control-alternative bg-secondary">
                                                                                                <option value="1">Lima</option>
                                                                                                <option value="2">Pasco</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-4 col-md-4">
                                                                                    <div class="list-group list-group-flush ">
                                                                                        <div class="form-group focused">
                                                                                            <label class="form-control-label" for="input-name">PROVINCIA</label>
                                                                                            <select name="" class="form-control form-control-alternative bg-secondary">
                                                                                                <option value="1">Huarochiri</option>
                                                                                                <option value="2">Huarura</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-4 col-md-4">
                                                                                    <div class="list-group list-group-flush ">
                                                                                        <div class="form-group focused">
                                                                                            <label class="form-control-label" for="input-name">DISTRITO</label>
                                                                                            <select name="" class="form-control form-control-alternative bg-secondary">
                                                                                                <option value="1">Villa el salvador</option>
                                                                                                <option value="2">Santa Anita</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-4">
                                                                                <div class="col-12">
                                                                                    <div class="list-group list-group-flush ">
                                                                                        <div class="form-group focused d-flex">
                                                                                            <button type="sumit" class="btn btn-lg col-sm-12 col-md-6 btn-primary mx-auto"> Guardar</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-4">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="list-group list-group-flush ">
                                                                        <div class="form-group focused">
                                                                            <label class="form-control-label" for="input-name">PRODUCTO</label>
                                                                            <div class="input-group input-group-alternative">
                                                                                <input class="form-control form-control-alternative bg-secondary input-mostrar__producto" placeholder="PRODUCTO" type="text">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-secondary cursor-pointer btn-search__producto"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row div-mostrar__producto" style="display: none;">
                                                                <div class="col-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table align-items-center table-flush tabla-choose__producto">
                                                                            <thead class="thead-light">
                                                                                <tr>
                                                                                    <th scope="col">Código</th>
                                                                                    <th scope="col">Descripción</th>
                                                                                    <th scope="col"></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="tbody-mostrar__producto">
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-12">
                                                                    <div class="list-group list-group-flush ">
                                                                        <div class="form-group focused">
                                                                            <label class="form-control-label" for="input-name">CANTIDAD</label>
                                                                            <input type="number" name="name" id="input-name" class="form-control form-control-alternative bg-secondary input-cantidad__producto" placeholder="CANTIDAD" value="" required="" autofocus="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4">
                                                            <div class="list-group list-group-flush ">
                                                                <div class="form-group focused">
                                                                    &nbsp;
                                                                    <br>
                                                                    <button type="button" class="btn col-sm-12 col-sm-12 btn-warning mx-auto btn-save__producto"><i class="fa fa-save" aria-hidden="true"></i> Guardar Producto</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-12">
                                                            <div class="list-group list-group-flush ">
                                                                <div class="form-group focused d-flex">
                                                                    <button type="button" class="btn btn-lg col-sm-12 col-md-6 btn-danger mx-auto"> Registrar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    Lista de Proformas
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <div>
                                                            <table class="table align-items-center">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th scope="col" data-sort="name" class="sort">Nro</th>
                                                                        <th scope="col" data-sort="name" class="sort">Nombre</th>
                                                                        <th scope="col" data-sort="budget" class="sort">Descripción</th>
                                                                        <th scope="col" data-sort="status" class="sort">Cantidad</th>
                                                                        <th scope="col">Precio Unitario</th>
                                                                        <th scope="col">Precio Total</th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="list">
                                                                    <tr>
                                                                        <td scope="col" data-sort="name" class="sort">1</th>
                                                                        <td scope="col" data-sort="name" class="sort">joyas</th>
                                                                        <td scope="col" data-sort="budget" class="sort">----</th>
                                                                        <td scope="col" data-sort="status" class="sort">1</th>
                                                                        <td scope="col" data-sort="status" class="sort">20</th>
                                                                        <th scope="col">
                                                                            <button type="button" class="btn btn-light">
                                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                            </button>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="col" data-sort="name" class="sort">2</th>
                                                                        <td scope="col" data-sort="name" class="sort">joyas 2</th>
                                                                        <td scope="col" data-sort="budget" class="sort">Esta es una joya de alto valor-</th>
                                                                        <td scope="col" data-sort="status" class="sort">2</th>
                                                                        <td scope="col" data-sort="status" class="sort">40</th>
                                                                        <th scope="col">
                                                                            <button type="button" class="btn btn-light">
                                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                            </button>
                                                                        </th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-6"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="./js/proforma.js"></script>
        </body>

        </html>
<?php
    }
}

?>