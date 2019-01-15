<?php

session_start();
// Comprobamos la variable get

if (@$_GET["idioma"]) {

    switch ($_GET["idioma"]) {
        // Espiñol
        case 'es':
            $_SESSION["idioma"] = $_GET["idioma"];
            break;
        // Inglé
        case 'en':
            $_SESSION["idioma"] = $_GET["idioma"];
            break;
        // Catalan
        case 'cat':
            $_SESSION["idioma"] = $_GET["idioma"];
            break;
        // Si no existe lo ponemos en español
        default:
            $_SESSION["idioma"] = "es";
            break;
    }
} elseif (!$_SESSION["idioma"]) {
    // Si el get no existe ponemos el español como default.
    $_SESSION["idioma"] = "es";
}

// Incluimos las traducciones

include("idiomas/" . $_SESSION["idioma"] . ".php");
?> 
