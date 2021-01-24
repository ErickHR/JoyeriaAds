<?php
include_once('./componentes/menu.php');
include_once('./componentes/nav_bar.php');

class index
{

    public function mostrarindex()
    {
?>


        <?php
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
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}

?>