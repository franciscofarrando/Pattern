<?php
include 'tigger.php';

$tigger = Tigger::getInstance();

$tiger->roar();
$tiger->roar();
$tiger->roar();
$tiger->roar();
$tiger->roar();

echo "\nNums of roar's: ".$tigger->getCounter();

?>