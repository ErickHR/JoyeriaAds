<?php
include_once('../componentes/nav_bar.php');

class reclamo
{

    public static function mostrarReclamo()
    {
        include_once('../componentes/menu.php');
        $menu = new menu;
        $menu->sideBar();
?>

        <body class="overflow-hidden">
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
                                                    <div class="w-100 d-flex">
                                                        <div class="mx-auto w-auto">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12">
                                                                    <div class="list-group list-group-flush ">
                                                                        <div class="form-group focused">
                                                                            <label class="form-control-label" for="input-name">Lista de Productos</label>
                                                                            <select name="" id="" class="form-control form-control-alternative bg-secondary">
                                                                                <option value="001">Producto 1</option>
                                                                                <option value="002">Producto 2</option>
                                                                                <option value="003">Producto 3</option>
                                                                                <option value="004">Producto 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <label class="form-control-label" for="input-name">Categoría</label>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-md-6">
                                                                        <div class="custom-control custom-radio mb-3">
                                                                            <input name="custom-radio-2" class="custom-control-input" id="customRadio6" checked="" type="radio">
                                                                            <label class="custom-control-label" for="customRadio6">Producción</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-6">
                                                                        <div class="custom-control custom-radio mb-3">
                                                                            <input name="custom-radio-2" class="custom-control-input" id="customRadio6" checked="" type="radio">
                                                                            <label class="custom-control-label" for="customRadio6">Almacén</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12">
                                                                    <div class="list-group list-group-flush ">
                                                                        <div class="form-group focused">
                                                                            <label class="form-control-label" for="input-name">Detalle</label>
                                                                            <textarea class="form-control form-control-alternative bg-secondary" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe el detalle del reclamo"></textarea> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12">
                                                                    <div class="list-group list-group-flush ">
                                                                        <div class="form-group focused d-flex">
                                                                            &nbsp;
                                                                            <br />
                                                                            <button type="button" class="btn btn-lg col-sm-12 col-md-8 col-lg-6 btn-danger mx-auto"> <i class="fa fa-search" aria-hidden="true"></i> Buscar Boleta</button>
                                                                        </div>
                                                                    </div>
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
                                                                        <th scope="col" data-sort="name" class="sort">Descipción</th>
                                                                        <th scope="col" data-sort="budget" class="sort">Categoría</th>
                                                                        <th scope="col" data-sort="status" class="sort">Detalle</th>
                                                                        <th scope="col">Estado</th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="list">
                                                                    <tr>
                                                                        <td scope="col" data-sort="name" class="sort">1</th>
                                                                        <td scope="col" data-sort="name" class="sort">Producto 1</th>
                                                                        <td scope="col" data-sort="budget" class="sort">Aretes</th>
                                                                        <td scope="col" data-sort="status" class="sort">Estes es un areta que tiene fallos</th>
                                                                        <td scope="col" data-sort="status" class="sort">1</th>
                                                                        <th scope="col">
                                                                            <button type="button" class="btn btn-primary">
                                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                            </button>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="col" data-sort="name" class="sort">2</th>
                                                                        <td scope="col" data-sort="name" class="sort">Producto 2</th>
                                                                        <td scope="col" data-sort="budget" class="sort">Collar</th>
                                                                        <td scope="col" data-sort="status" class="sort">Estes es un areta que tiene fallos</th>
                                                                        <td scope="col" data-sort="status" class="sort">1</th>
                                                                        <th scope="col">
                                                                            <button type="button" class="btn btn-primary">
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
    <?php
    }
}

    ?>