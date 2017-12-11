<?php
// Kleines Utility um einfach die Datenbank befüllen zu können.
use Tracker\TrackerLine;

require_once __DIR__ . '/../bootstrap.php';

$lines = array(
    new TrackerLine(new DateTime("2013-11-11"), "120", "23"),
    new TrackerLine(new DateTime("2015-05-15"), "525", "55"),
    new TrackerLine(new DateTime("2017-03-13"), "1000", "4"),

);

echo "Lösche alte Einträge ... ";
$q = $entityManager->createQuery('delete from Tracker\TrackerLine');
$oldEntries = $q->execute();
echo "OK ($oldEntries Alle Daten gelöscht)\n";

echo "Lege frische Einträge an ... ";
$c = 0;
foreach($lines as $line) {
    $entityManager->persist($line);
    $c++;
}
$entityManager->flush();
echo "OK ($c neue Daten sind angelegt)\n";
