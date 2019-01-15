<!DOCTYPE html>
<?php include("lang.php");
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="estilos/main.css" type="text/css"> 
    </head>
    <body>

        <div align="right"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <?php echo "<img src='imagenes/".$_SESSION["idioma"].".png'" ?>" alt="Idioma"></a>


            <ul class="dropdown-menu" role="menu" style="min-width:0">
                <li><a href="?idioma=es"><img src="imagenes/es.png"></a></li>
                <li><a href="?idioma=cat"><img src="imagenes/cat.png"></a></li>
                <li><a href="?idioma=en"><img src="imagenes/en.png"></a></li>
            </ul>
        </div>


        <br>
        <?php
        echo "<a href='#'>" . $menu1 . "</a>" . " ";
        echo "<a href='#'>" . $menu2 . "</a>" . " ";
        echo "<a href='#'>" . $menu3 . "</a>" . " ";
        echo "<a href='#'>" . $menu4 . "</a>" . " ";

        ?>


         


    </body>
</html>
