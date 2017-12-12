<?php
// Gemeinsame genutzte Dinge sind dorthin ausgelagert
require_once '../bootstrap.php';

include "functions/add_element.php";

//$leer_form = "test";


// Das vorkonfigurierte Twig nutzen, um ein Template (1. Parameter) zu rendern
// und dabei genau zu bestimmen, welche Variablen verwendet werden sollen
// (2. Parameter).
echo $twig->render('add.php.twig', array('leer_form' => $leer_form, 'error_datum' => $error_datum, 'error_strecke'=>$error_strecke, 'error_zeit'=>$error_zeit,
    'datum'=> $datum, 'strecke' => $strecke, 'zeit' => $zeit));