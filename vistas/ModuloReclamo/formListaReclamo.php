<?php
include_once('../componentes/nav_bar.php');

class listaReclamo
{

    public static function mostrarListaReclamo()
    {
        include_once('../componentes/menu.php');
        $menu = new menu;
        $menu->sideBar();
?>

        <div id="app">
            <div class="w-100 position-relative">
                <div id="origin" class="z-index-9 origin position-absolute left-0 top-0 w-100">
                    <div class="grid-panel">
                        <div>
                            <?php
                            $nav = new navBar;
                            $nav->navBar();
                            ?>
                        </div>
                        <!-- <div class=" "> -->
                        <div class="vh-100 overflow-scroll shadow pb-4">
                            <div id="envioSeguimientoList" class=" bg-base-plomo">
                                <div class="shadow ">
                                    <div class="p-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-sm-4 col-md-4">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">DNI</label>
                                                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative bg-secondary" placeholder="DNI" value="" required="" autofocus="">
                                                                <label class="form-control-label" for="input-name">NOMBRE: </label><cite title="Source Title">Huarancca Rivas, Isaac Erick</cite>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-md-4">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">Nro. Ficha de reclamo</label>
                                                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative bg-secondary" placeholder="Nro" value="" required="" autofocus="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-md-4">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                &nbsp;
                                                                <br />
                                                                <button type="button" class="btn btn-lg col-sm-12 col-md-8 col-lg-6 btn-danger"> <i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
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
                                                <div class="">
                                                    <!-- <div class="table-responsive"> -->
                                                    <div>
                                                        <table class="table align-items-center">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" data-sort="name" class="sort">Nro</th>
                                                                    <th scope="col" data-sort="name" class="sort">Descipción</th>
                                                                    <th scope="col" data-sort="budget" class="sort">Categoría</th>
                                                                    <th scope="col" data-sort="status" class="sort">Detalle</th>
                                                                    <th scope="col">Estado</th>
                                                                    <th scope="col"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list">
                                                                <tr class="bg-success">
                                                                    <td scope="col" data-sort="name" class="sort">1</th>
                                                                    <td scope="col" data-sort="name" class="sort">Producto 1</th>
                                                                    <td scope="col" data-sort="budget" class="sort">Aretes</th>
                                                                    <td scope="col" data-sort="status" class="sort">Estes es un areta que tiene fallos</th>
                                                                    <td scope="col" data-sort="status" class="sort ">Entregado</th>
                                                                    <td class="text-right">
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
                                                                    </td>
                                                                </tr>
                                                                <tr class="bg-warning">
                                                                    <td scope="col" data-sort="name" class="sort">2</th>
                                                                    <td scope="col" data-sort="name" class="sort">Producto 2</th>
                                                                    <td scope="col" data-sort="budget" class="sort">Collar</th>
                                                                    <td scope="col" data-sort="status" class="sort">Estes es un areta que tiene fallos</th>
                                                                    <td scope="col" data-sort="status" class="sort">Cancelado</th>
                                                                    <td class="text-right">
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
                                                                    </td>
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
<?php
    }
}

?>