<?php 
require_once './Car.php';
require_once './Book.php';

// new est un mot clé permettant d'effectue une instanciation
// une class

$volkswagen= new Car();

$volkswagen->setModel('yuguiyui');
$volkswagen->setColor('vert');
$volkswagen->setDate('1996');

 $volkswagen->getModel();
 $volkswagen->getColor();
 $volkswagen->getDate();

 echo'<br>';
echo $volkswagen->display();

$livreUn=new Book('Alice au pays des merveilles','Lewis Carrol',124,1865);
$livreDeux= new Book('Harry Potter à l\'école des sorciers','J. K. Rowling',320,1997);

echo'<br>';
echo $livreUn->read();

echo'<br>';
echo $livreDeux->read();




// $livreUn->setTitle('Alice au pays des merveilles');
// $livreDeux->setTitle('Harry Potter à l\'école des sorciers');

// $livreUn->setAuthor('Lewis Carrol');
// $livreDeux->setAuthor('J. K. Rowling');

// $livreUn->setPages(124);
// $livreDeux->setPages(320);

// $livreUn->setYear(1865);
// $livreDeux->setYear(1997);

// $livreUn->getTitle();
// $livreUn->getAuthor();
// $livreUn->getPages();
// $livreUn->getYear();

// echo'<br>';
// echo $livreUn->read();

// $livreDeux->getTitle();
// $livreDeux->getAuthor();
// $livreDeux->getPages();
// $livreDeux->getYear();

// echo'<br>';
// echo $livreDeux->read();





