<?php
include_once('../componentes/estilos.php');
include_once('../componentes/nav_bar.php');

class formProforma
{

    public function formProformaShow()
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
                                                                <button type="button" class="btn btn-lg col-sm-12 col-md-6 btn-danger mx-auto btn-form-registrar__proforma"> Registrar</button>
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
                                                            <tbody class="list tbody-lista__productos">
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