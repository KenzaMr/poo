<?php
require_once './Utilitaire/Autoloader.php';

use App\Entity\Peugeot;
use App\Entity\Renault;
use App\Entity\User;
use App\Utilitaire\Autoloader;

Autoloader::autoload();

$utilisateur=new User();
$utilisateur->setPseudo('Oura');

$utilisateur1=new User();
$utilisateur1->setPseudo('Nico');

$modelRenault=new Renault();
echo $modelRenault->demarrer();
echo'<br>';
echo $modelRenault->carburant();
echo'<br>';
echo $modelRenault->nbTest();
echo'<br>';
echo $modelRenault->start($utilisateur1);


echo'<br>';
$modelPeugeot=new Peugeot();
echo $modelPeugeot->demarrer();
echo'<br>';
echo $modelPeugeot->carburant();
echo'<br>';
echo $modelPeugeot->nbTest();
echo'<br>';
echo $modelPeugeot->start($utilisateur);
