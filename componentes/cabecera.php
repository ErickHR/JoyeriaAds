<?php
class html
{

    public static function cabecera( $ru = '..' )
    {
?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

            <link rel="stylesheet" href="<?=$ru?>/styles/argon.css">
            <link rel="stylesheet" href="<?=$ru?>/styles/nucleo.css">
            <link rel="stylesheet" href="<?=$ru?>/styles/style.css">

            <link rel="stylesheet" href="<?=$ru?>/styles/componentes/menu.css">

            <title>bienvenida</title>
        </head>

        <body class="overflow-hidden">


        <?php
    }

    public static function footer(  $scripts = "",  $ru = '..' )
    {
        
        ?>
            <script src="<?=$ru?>/js/script.js"></script>
            <script src="<?=$ru?>/js/componentes/menu.js"></script>
            <?php if ($scripts != "") { ?>
                <script src="<?=$ru?>/js/<?php echo $scripts ?>.js"></script>
            <?php } ?>
        </body>

        </html>


<?php
    }
}

?>