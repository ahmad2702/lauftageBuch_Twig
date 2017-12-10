<?php
// Gemeinsame genutzte Dinge sind dorthin ausgelagert
require_once '../bootstrap.php';

$all = Tracker\TrackerLine::getAllLines();

// Das vorkonfigurierte Twig nutzen, um ein Template (1. Parameter) zu rendern
// und dabei genau zu bestimmen, welche Variablen verwendet werden sollen
// (2. Parameter).
echo $twig->render('index.php.twig', array('lines' => $all));