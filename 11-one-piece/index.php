<?php
require_once './Entity/Marine.php';
require_once './Entity/Pirate.php';
require_once './Entity/Revolutionary.php';
require_once './Entity/ViceAdmiral.php';
require_once './Entity/Commander.php';

$marin=new Marine('Smoker',19,50000);
echo $marin->getRole();

echo '<br>';

$pirate= new Pirate('Luffy',19,484545151);
echo $pirate->getRole();

echo '<br>';
$revolutionnaire= new Revolutionary('Le pére de Luffy',46,145452000);
echo $revolutionnaire->getRole();

echo '<br>';
$admiral= new ViceAdmiral('Smoker',19,646464);
echo $admiral->commandFleet();

echo '<br>';
$newRevolutionnaire= new Commander('Le pére de Luffy',46,145452000);
echo $newRevolutionnaire->leadRevolution();
