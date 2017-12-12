<?php
// Gemeinsame genutzte Dinge sind dorthin ausgelagert
require_once '../bootstrap.php';

//Ladet alle Daten aus DB
$all = $entityManager->getRepository('Tracker\TrackerLine')->findBy([], ['day' => 'ASC']);

$first= $all[0];
$last = $all[sizeof($all)-1];


// Das vorkonfigurierte Twig nutzen, um ein Template (1. Parameter) zu rendern
// und dabei genau zu bestimmen, welche Variablen verwendet werden sollen
// (2. Parameter).
echo $twig->render('gesamt.php.twig', array('lines' => $all, 'first'=>$first, 'last'=>$last));