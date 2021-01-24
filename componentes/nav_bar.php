<?php
class navBar
{

    public function navBar()
    {
?>

        <nav class="navbar p-1 navbar-horizontal navbar-expand-lg navbar-dark bg-red">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- <img src="/img/logo_blanco.png" alt="logo" class="pl-3 pr-3" style="width: 60px;"> -->
                    <div class="navbar-brand text-white">Envios
                    </div>
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

<?php
    }
}

?>