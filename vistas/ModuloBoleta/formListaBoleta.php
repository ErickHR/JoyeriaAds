<?php
include_once('../componentes/nav_bar.php');
class listaBoleta
{

    public function mostrarListaBoleta()
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
                                                    <div class="col-12 col-sm-12 col-md-4">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">DNI</label>
                                                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative bg-secondary" placeholder="DNI" value="" required="" autofocus="">
                                                                <label class="form-control-label" for="input-name">NOMBRE: </label><cite title="Source Title">Huarancca Rivas, Isaac Erick</cite>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">Nro. Boleta</label>
                                                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative bg-secondary" placeholder="Nro. Boleta" value="" required="" autofocus="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                &nbsp;
                                                                <br />
                                                                <button type="button" class="btn btn-lg col-sm-12 col-md-8 col-lg-6 btn-danger mx-auto"> <i class="fa fa-search" aria-hidden="true"></i> Buscar Boleta</button>
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
                                                                    <th scope="col" data-sort="name" class="sort">Nro Boleta</th>
                                                                    <th scope="col" data-sort="budget" class="sort">Fecha de Emisión</th>
                                                                    <th scope="col" data-sort="status" class="sort">Nombre</th>
                                                                    <th scope="col">Estado</th>
                                                                    <th scope="col"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list">
                                                                <tr>
                                                                    <td scope="col" data-sort="name" class="sort">1</th>
                                                                    <td scope="col" data-sort="name" class="sort">0001</th>
                                                                    <td scope="col" data-sort="budget" class="sort">2020-10-20</th>
                                                                    <td scope="col" data-sort="status" class="sort">Huarancca Rivas, Isaac Erick</th>
                                                                    <td scope="col" data-sort="status" class="sort text-warning">Garantia Caducada</th>
                                                                    <th scope="col">
                                                                        <a href="/joyeriaADs/obtenerDatos/obtenerReclamo.php?accion=reclamo" class="btn btn-primary">
                                                                            <i class="fa fa-times" aria-hidden="true"></i> Generar Reclamo
                                                                        </a>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="col" data-sort="name" class="sort">2</th>
                                                                    <td scope="col" data-sort="name" class="sort">0002</th>
                                                                    <td scope="col" data-sort="budget" class="sort">2020-10-20</th>
                                                                    <td scope="col" data-sort="status" class="sort">Huarancca Rivas, Isaac Erick</th>
                                                                    <td scope="col" data-sort="status" class="sort text-warning">Garantia Activa</th>
                                                                    <th scope="col">
                                                                        <a href="/joyeriaADs/obtenerDatos/obtenerReclamo.php?accion=reclamo" class="btn btn-primary">
                                                                            <i class="fa fa-times" aria-hidden="true"></i> Generar Reclamo
                                                                        </a>
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
<?php
    }
}

?>