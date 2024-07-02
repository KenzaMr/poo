<?php
require_once './Article.php';
require_once './Conserve.php';
require_once './Aliment.php';

$exemple=new Article(' une brosse à cheveux',16);

echo $exemple->displayProduct();

$boiteConserve= new Conserve('Ravioli',12,["Tuc","Lays","Vico","Market"]);
echo'<br>';
echo $boiteConserve->displayProduct();

echo'<br>';
$boiteConserve->setListeExcipient(["Tuc","Lays","Vico","Market"]);
echo $boiteConserve->methode();

echo'<br>';
$dateconserve= new Aliment('Petit pois',3,2025);
echo $dateconserve->displayProduct();