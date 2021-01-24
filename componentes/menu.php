<?php
class menu
{

    public function sideBar()
    {
?>
        <div id="menu">
            <div id="app-menu">
                <nav class="navbar navbar-expand-md border-bottom navbar-light bg-white">
                    <div class="container">
                        <span>joyeria July's</span>
                        <!-- <img src="/img/bankPeru.jpeg" style="width:35px"> -->
                        <div class="ml-auto">
                            <!-- <app-hamburger id='hamburger' hideClass='app-menu' /> -->
                            <div id="hamburger" style="width: 60px; height: 39px; left: 130px; position: relative;">
                                <button class="burger">
                                    <span class="h-top-line"></span>
                                    <span class="h-middle-line"></span>
                                    <span class="h-bottom-line"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="container-item">
                    <div>
                        <div class="item d-flex">
                            <a href="/joyeriaADs/obtenerDatos/obtenerProforma.php?accion=Proforma">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <!-- <i :class="icon"></i> -->
                                <span class="item-tittle">
                                    Proforma
                                </span>
                            </a>
                        </div>
                        <div class="item d-flex">
                            <a href="/joyeriaADs/obtenerDatos/obtenerProforma.php?accion=ListaProforma">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <!-- <i :class="icon"></i> -->
                                <span class="item-tittle">
                                    Lista de Proformas
                                </span>
                            </a>
                        </div>
                        <div class="item d-flex">
                            <a href="/joyeriaADs/obtenerDatos/obtenerBoleta.php?accion=listaboleta">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <!-- <i :class="icon"></i> -->
                                <span class="item-tittle">
                                    Lista Boleta
                                </span>
                            </a>
                        </div>
                        <div class="item d-flex">
                            <a href="/joyeriaADs/obtenerDatos/obtenerReclamo.php?accion=reclamo">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <!-- <i :class="icon"></i> -->
                                <span class="item-tittle">
                                    Reclamo
                                </span>
                            </a>
                        </div>
                        <div class="item d-flex">
                            <a href="/joyeriaADs/obtenerDatos/obtenerReclamo.php?accion=listaReclamo">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <!-- <i :class="icon"></i> -->
                                <span class="item-tittle">
                                    Lista Reclamo
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}

?>