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
                                                        <table class="display dataTable no-footer dtr-inline" style="width: 100%" id="tabla-lista__reclamos">
                                                            <thead class="thead-light">
                                                                <th>Nro</th>
                                                                <th>Producto</th>
                                                                <th>Categoría</th>
                                                                <th>Detalle</th>
                                                                <th>Estado</th>
                                                                <th></th>
                                                            </thead>
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