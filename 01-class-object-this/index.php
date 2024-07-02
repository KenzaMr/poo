<?php
require_once './User.php';
require_once './Animal.php';

$kenza= new User();
//Un objet est une instance de classe.
//Un objet est une variable qui contient toutes les propriétés et méthode d'une classe 
$kenza->firstName="Kenza";
$kenza->lastName='Mroudjae';
$kenza->email='knza@gmail.com';

echo $kenza->bonjour();
echo'<br>';
echo $kenza->presentation(23);
echo'<br>';

$dog= new Animal();
$cat= new Animal();

echo $dog->name='Bianco';
echo'<br>';
echo $cat->name='Paha';

echo'<br>';

echo $dog->type="Berger allemand";
echo'<br>';
echo $cat->type='Siamois';

echo'<br>';

echo $dog->age=7;
echo'<br>';
echo $cat->age=6;

echo'<br>';

echo $dog->eat();
echo'<br>';
echo $cat->eat();

echo'<br>';

echo $dog->sleep();
echo'<br>';
echo $cat->sleep();
