<?php

use Tracker\TrackerLine;

require_once __DIR__ . '/../../bootstrap.php';


if(isset($_POST[addForm])){
    $datum = new DateTime($_POST['datum']);
    $strecke = $_POST['strecke'];
    $zeit = $_POST['zeit'];
    $lines = array(new TrackerLine($datum, $strecke, $zeit));

    foreach($lines as $line) {
        $entityManager->persist($line);
    }
    $entityManager->flush();

}

header('Location: ../');


