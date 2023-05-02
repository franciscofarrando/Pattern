<?php
include 'tiger.php';

$tiger = Tiger::getInstance();

$tiger->roar();
$tiger->roar();
$tiger->roar();
$tiger->roar();
$tiger->roar();

echo "\nNums of roar's: ".$tiger->getCounter();

?>