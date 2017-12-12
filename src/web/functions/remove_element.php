<?php

use Tracker\TrackerLine;

require_once __DIR__ . '/../../bootstrap.php';


if(isset($_POST[removeForm])){
    $removeID = $_POST['id'];

    $findElement = $entityManager->getRepository('Tracker\TrackerLine')->findOneBy(['id' => $removeID]);
    $entityManager->remove($findElement);
    $entityManager->flush();

}

header('Location: ../details.php');




