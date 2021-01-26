<?php
include_once('../componentes/nav_bar.php');

class Boleta
{

    public static function mostrarBoleta($data)
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
                                                    <div class="col-12 col-sm-12 col-md-12">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused">
                                                                <label class="form-control-label" for="input-name">DNI</label>
                                                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative bg-secondary" placeholder="DNI" value="<?= $data[0]->dnicliente ?>" required="" autofocus="">
                                                                <label class="form-control-label" for="input-name">NOMBRE: </label><cite title="Source Title"><?= $data[0]->dnicliente ?></cite>
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
                                                                            <input class="form-control form-control-alternative bg-secondary" placeholder="PRODUCTO" type="text">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text bg-secondary cursor-pointer"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="table-responsive">
                                                                    <table class="table align-items-center table-flush">
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th scope="col">Código</th>
                                                                                <th scope="col">Descripción</th>
                                                                                <th scope="col"></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    prod_001
                                                                                </th>
                                                                                <td>
                                                                                    joya 1
                                                                                </td>
                                                                                <td>
                                                                                    <button class="btn btn-ligth bg-secondary"><i class="fa fa-plus" aria-hidden="true"></i> </button>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    prod_002
                                                                                </th>
                                                                                <td>
                                                                                    joya 2
                                                                                </td>
                                                                                <td>
                                                                                    <button class="btn btn-ligth bg-secondary"><i class="fa fa-plus" aria-hidden="true"></i> </button>

                                                                                </td>
                                                                            </tr>
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
                                                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative bg-secondary" placeholder="CANTIDAD" value="" required="" autofocus="">
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
                                                                <button type="button" class="btn col-sm-12 col-sm-12 btn-warning mx-auto"><i class="fa fa-save" aria-hidden="true"></i> Guardar Producto</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-8">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="form-control-label" for="input-name">TIPO DE PAGO</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6 col-md-6">
                                                                    <div class="custom-control custom-radio mb-3">
                                                                        <input name="custom-radio-2" class="custom-control-input" id="customRadio6" checked="" type="radio">
                                                                        <label class="custom-control-label" for="customRadio6">Parcial</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-md-6">
                                                                    <div class="custom-control custom-radio mb-3">
                                                                        <input name="custom-radio-2" class="custom-control-input" id="customRadio6" checked="" type="radio">
                                                                        <label class="custom-control-label" for="customRadio6">Total</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-12">
                                                        <div class="list-group list-group-flush ">
                                                            <div class="form-group focused d-flex">
                                                                <button type="button" class="btn btn-lg col-sm-12 col-md-6 btn-danger mx-auto"> Generar Boleta</button>
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
                                                                <?php foreach( json_decode($data[0]->detal_proforma) as $item ) { ?>
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
                                                                <?php } ?>
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