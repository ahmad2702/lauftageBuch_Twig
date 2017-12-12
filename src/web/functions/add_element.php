<?php

use Tracker\TrackerLine;

require_once __DIR__ . '/../../bootstrap.php';

$error_datum = "";
$error_strecke = "";
$error_zeit = "";


if(isset($_POST[addForm])){

    $datum = trim(strip_tags($_POST['datum']));
    $strecke = trim(strip_tags($_POST['strecke']));
    $zeit = trim(strip_tags($_POST['zeit']));

    if(strtotime($datum) == FALSE or strtotime($datum)>strtotime(date('Y-m-d').' 00:00:00')){
        $error_datum = "datum f -";
        $datum = "";
    }

    if(is_numeric($strecke)==FALSE or $strecke<0 or $strecke==0){
        $error_strecke = "strecke f -";
        $strecke = "";
    }

    if(strtotime("1970-01-01 ".$zeit) == FALSE or strtotime("1970-01-01 ".$zeit)<0 or strtotime("1970-01-01 ".$zeit) ==0){
        $error_zeit = "zeit f -";
        $zeit = "";
    }



    if($error_datum=="" and $error_strecke == "" and $error_zeit == ""){
        $lines = array(new TrackerLine(new DateTime($datum), $strecke, strtotime("1970-01-01 ".$zeit)));

        foreach($lines as $line) {
            $entityManager->persist($line);
        }
        $entityManager->flush();

        header('Location: ../details.php');
    }


}




