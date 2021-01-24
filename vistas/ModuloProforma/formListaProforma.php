<?php

include_once('../componentes/estilos.php');
include_once('../componentes/nav_bar.php');

class Proforma
{

    public function mostrarListaPreguia()
    {
?>


        <?php
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
                        <!-- <div class="overflow-scroll shadow"> -->
                        <div class="vh-100 overflow-scroll pb-5">
                            <div id="envioSeguimientoList" class=" bg-base-plomo">
                                <div class="shadow ">
                                    <div class="p-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 col-sm-12 col-md-6">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">Nro</label>
                                                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative bg-secondary buscar-proforma__numero" placeholder="Nro" value="" required="" autofocus="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-12 col-md-6">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">DNI</label>
                                                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative bg-secondary buscar-proforma__dni" placeholder="DNI" value="" required="" autofocus="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-sm-12 col-md-6">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">DESDE</label>
                                                                <input type="date" name="name" id="input-name" class="form-control form-control-alternative bg-secondary buscar-proforma__fecha-desde" placeholder="Nro" value="<?= date('Y-m-d') ?>" required="" autofocus="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-12 col-md-6">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">HASTA</label>
                                                                <input type="date" name="name" id="input-name" class="form-control form-control-alternative bg-secondary buscar-proforma__fecha-hasta" placeholder="Nro" value="<?= date('Y-m-d') ?>" required="" autofocus="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused d-flex">
                                                                <button type="button" class="btn btn-lg col-md-4 col-sm-12 btn-danger mx-auto buscar-proforma__btn"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
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
                                                        <!-- <table class="table align-items-center" id="table-lista__proformas">
                                                                <thead class="thead-light">
                                                                    <th scope="col" data-sort="name" class="sort">Nro</th>
                                                                    <th scope="col" data-sort="name" class="sort">Fecha</th>
                                                                    <th scope="col" data-sort="budget" class="sort">Código</th>
                                                                    <th scope="col" data-sort="status" class="sort">Nombre</th>
                                                                    <th scope="col">Descripción</th>
                                                                    <th scope="col" data-sort="completion" class="sort">Total</th>
                                                                    <th scope="col"></th>
                                                                </thead>
                                                            </table> -->
                                                        <table id="table-lista__proformas" class="display dataTable no-footer dtr-inline" style="width: 100%">
                                                            <thead>
                                                                <th>#</th>
                                                                <th>Fecha</th>
                                                                <th>Código</th>
                                                                <th>Nombre</th>
                                                                <th>Descripción</th>
                                                                <th>Total</th>
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
        <div class="modal" tabindex="-1" style="display: none;" id="mostrarDetalle">
            <div class="modal-dialog modal-lg modal-md modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
                                        </tr>
                                    </thead>
                                    <tbody class="list tbody-lista__productos">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}

?>