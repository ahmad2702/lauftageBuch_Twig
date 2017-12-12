<?php

require_once '../../bootstrap.php';
/*
$eingabe = "23:23:23";

$date = '1970-01-01 ';

$check =  $date.$eingabe;

if(strtotime($check) !== FALSE){
    echo "ok";
}

$test = $date." 23:59:59";
echo " Date: ".(strtotime($test));


$first = "1970-01-01 00:00:00";
$last = "1970-01-02 00:00:00";

echo " Gesamtzahl: ".((strtotime($last)-strtotime($first))/86400);

//var_dump(strtotime($date) !== FALSE);
//preg_match("|^[\d]+$|", $var)


$texttt = "sdf";
if($texttt == ""){
    echo " --leer";
}
*/

//Ladet alle Daten aus DB
$all = $entityManager->getRepository('Tracker\TrackerLine')->findBy([], ['day' => 'ASC']);
$erste = 1;
$letzte = sizeof($all);

$last = $all[sizeof($all)-1];
//print_r($last);
next($last);

print strtotime(current($last));

/*
$yourTimeString = "1970-01-01 23:23:23";

$t = strtotime($yourTimeString) + 3600;

echo $t;

*/