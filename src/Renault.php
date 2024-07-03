<?php
require_once './Vehicule.php';

class Renault extends Vehicule{

    /**
     * @var string
     */
    private string $carburant;

    public function carburant(){
        return 'diesel';
    }

    public function nbTest(){
        return parent::nbTest()+30;
    }

    /**
     * Get the value of carburant
     *
     * @return  string
     */ 
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * Set the value of carburant
     *
     * @param  string  $carburant
     *
     * @return  self
     */ 
    public function setCarburant(string $carburant)
    {
        $this->carburant = $carburant;

        return $this;
    }
}