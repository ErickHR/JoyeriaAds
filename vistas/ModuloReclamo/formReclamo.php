<?php
include_once('../componentes/nav_bar.php');

class reclamo
{

    public static function mostrarReclamo($data)
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
                                                                            <?php //print_r($data) ?>
                                                                            <label class="form-control-label" for="input-name">Lista de Productos</label>
                                                                            <select name="" id="" class="chosen chosen-select form-control form-control-alternative bg-secondary form-select__lista-productos">
                                                                                <option value="">Seleccione un producto</option>
                                                                                <?php foreach ($data as $item) { ?>
                                                                                    <option value="<?= $item->producto->getIdProducto() ?>"><?= $item->producto->getNombre() ?></option>
                                                                                <?php } ?>
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
                                                                            <input name="form-rb__agregar" class="custom-control-input form-rb__produccion form-rb__agregar" value="Produccion" id="produccion" checked type="radio">
                                                                            <label class="custom-control-label" for="produccion">Producción</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-6">
                                                                        <div class="custom-control custom-radio mb-3">
                                                                            <input name="form-rb__agregar" class="custom-control-input form-rb__almacen form-rb__agregar" value="Almacén" id="almacen" type="radio">
                                                                            <label class="custom-control-label" for="almacen">Almacén</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12">
                                                                    <div class="list-group list-group-flush ">
                                                                        <div class="form-group focused">
                                                                            <label class="form-control-label" for="input-name">Detalle</label>
                                                                            <textarea class="form-control form-control-alternative bg-secondary form-ta__detalle" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe el detalle del reclamo"></textarea> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="list-group list-group-flush ">
                                                                        <div class="form-group focused">
                                                                            &nbsp;
                                                                            <br />
                                                                            <button type="button" class="btn btn-lg col-sm-12 col-md-12 col-lg-12 btn-info mx-auto form-btn__reclamos"> <i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="list-group list-group-flush ">
                                                                        <div class="form-group focused">
                                                                            &nbsp;
                                                                            <br />
                                                                            <button type="button" class="btn btn-lg col-sm-12 col-md-12 col-lg-12 btn-danger mx-auto form-btn__guardar"> <i class="fas fa-save"></i> Guardar</button>
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
                                                                        <th scope="col" data-sort="name" class="sort">Producto</th>
                                                                        <th scope="col" data-sort="budget" class="sort">Categoría</th>
                                                                        <th scope="col" data-sort="status" class="sort">Detalle</th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="list tabla__productos">
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