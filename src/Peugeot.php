<?php
require_once './Vehicule.php';
class Peugeot extends Vehicule
{
      /**
     * @var string
     */
    private string $carburant;

    public function carburant(){
        return 'essence';
    }

    public function nbTest(){
        return parent::nbTest()+70;
    }
}
