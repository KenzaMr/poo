<?php
require_once './Entity/Marine.php';
require_once './Entity/Pirate.php';
require_once './Entity/Revolutionary.php';


$marin=new Marine('Smoker',19,50000);
echo $marin->getRole();

echo '<br>';

$pirate= new Pirate('Luffy',19,484545151);
echo $pirate->getRole();

echo '<br>';
$revolutionnaire= new Revolutionary('Le pére de Luffy',46,145452000);
echo $revolutionnaire->getRole();