<?php

require_once './Utils/Autoloader.php';

use App\Entity\Bd;
use App\Utils\Autoloader;

Autoloader::autoload();

$description= "C'est l'histoire d'un petit garçon se nommant Toto qui aimer raconter des petites histoire mais surtout des blagues";
$toto= new Bd('Les blagues de toto',$description,2004,'Thierry Coppée');
echo $toto->getAuteur();
