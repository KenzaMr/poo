<?php
require_once './SimulateurCredit.php';
require_once './Mathematique.php';

echo SimulateurCredit::TAUX;
echo '<br>';
echo SimulateurCredit::calculInteret(10000);
echo'<br>';

echo Mathematique::addition(2,4);
echo'<br>';
echo Mathematique::soustration(6,4);
echo'<br>';
echo Mathematique::division(0,5);
echo'<br>';
echo Mathematique::multiplication(4,4);


