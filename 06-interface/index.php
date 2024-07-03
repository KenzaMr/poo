<?php 
require_once './Wolf.php';
require_once './Bird.php';

$animal= new Bird('Pigeon',3,2,['pain','ordure','connerie'],true);

$affiche=new Wolf('Pigeon',3,2,['pain','ordure','connerie'],true);

echo $affiche->eatBird($animal);

