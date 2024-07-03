<?php
require_once './Renault.php';
require_once './Peugeot.php';

$modelRenault=new Renault();
echo $modelRenault->demarrer();
echo'<br>';
echo $modelRenault->carburant();
echo'<br>';
echo $modelRenault->nbTest();



echo'<br>';
$modelPeugeot=new Peugeot();
echo $modelPeugeot->demarrer();
echo'<br>';
echo $modelPeugeot->carburant();
echo'<br>';
echo $modelPeugeot->nbTest();

