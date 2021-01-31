<?php
include_once('../componentes/nav_bar.php');
class listaBoleta
{

    public static function mostrarListaBoleta()
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
                                                    <div class="col-12 col-sm-12 col-md-6">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">DNI</label>
                                                                <input type="text" name="dni" id="input-name" class="form-control form-control-alternative bg-secondary buscar-boleta__dni" placeholder="DNI" value="" required="" autofocus="">
                                                                <label class="form-control-label" for="input-name">NOMBRE: </label><cite title="Source Title">Huarancca Rivas, Isaac Erick</cite>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">Nro. Boleta</label>
                                                                <input type="text" name="numero" id="input-name" class="form-control form-control-alternative bg-secondary" placeholder="Nro. Boleta" value="" required="" autofocus="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-sm-12 col-md-6">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">DESDE</label>
                                                                <input type="date" name="desde" id="input-name" class="form-control form-control-alternative bg-secondary buscar-boleta__fecha-desde" placeholder="Nro" value="<?= date('Y-m-d') ?>" required="" autofocus="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-12 col-md-6">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">HASTA</label>
                                                                <input type="date" name="hasta" id="input-name" class="form-control form-control-alternative bg-secondary buscar-boleta__fecha-hasta" placeholder="Nro" value="<?= date('Y-m-d') ?>" required="" autofocus="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused d-flex">
                                                                <button type="button" class="btn btn-lg col-md-4 col-sm-12 btn-danger mx-auto buscar-boleta__btn"><i class="fa fa-search" aria-hidden="true"></i> Buscar Boleta</button>
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
                                                        <table id="table-lista__boletas" class="display dataTable no-footer dtr-inline" style="width: 100%">
                                                            <thead class="thead-light">
                                                                <th>Nro</th>
                                                                <th>Nro Boleta</th>
                                                                <th>Fecha de Emisión</th>
                                                                <th>Nombre</th>
                                                                <th>Estado</th>
                                                                <th>
                                                                </th>
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