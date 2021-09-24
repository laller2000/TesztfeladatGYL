<?php
header('Content-Type:text/html; charset=utf-8');
session_start();
require_once './csatlakozas.php';
$menu= filter_input(INPUT_GET,"menu",FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Tesztfeladat</title>
        <script src="jquery-3.6.0.min.js"></script>
        <script src="popper.min.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap-5.1.1-dist/css/bootstrap.min.css"/>
        <script src="bootstrap-5.1.1-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap-5.1.1-dist/stilus.css"/>
    </head>
    <body>
        <div class="container">
            <ul class="nav nav-tabs nav-justified">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menu=Szamlazasicimeim">Számlázási címeim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menu=Megrendeles">Megrendelés</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menu=Megrendeleseklistazasa">Megrendelések listázása</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menu=SzamlacimModositas">SzámlacimModositás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menu=SzamlacimTorles">SzámlacimTörlés</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <?php
            switch ($menu) {
                case "Szamlazasicimeim":
                    require_once './Szamlazasicimeim.php';
                    break;
                case "Megrendeles":
                    require_once './Megrendeles.php';
                    break;
                case "Megrendeleseklistazasa":
                    require_once './Megrendeleseklistazasa.php';
                    break;
                case "SzamlacimModositas":
                    require_once './SzamlazasicimModositas.php';
                    break;
                case "SzamlacimTorles":
                    require_once './SzamlacimTorles.php';
                    break;
                Default:
                    require_once './Megrendeleseklistazasa.php';
                    break;
                    
            }
            ?>
        </div>
    </body>
    <footer>
        <p style="text-align: center;">Készítette: Gyönyörű Lajos 2021.09.23</p>
    </footer>
</html>
