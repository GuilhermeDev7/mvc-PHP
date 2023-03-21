<?php

include("App/Controller/PessoaController.php");

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url) {
        case "/":
                echo "Home";
        break;

        case "/pessoa":
                PessoaController:: indexx();
        break;

        case "/pessoa/form":
                PessoaController::formulario();
        break;

        case "/pessoa/form/save":
                PessoaController::save();
        break;

        default: 
                echo "pp 404";
        break;
}



?>