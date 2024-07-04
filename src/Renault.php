<?php
require_once './Vehicule.php';
require_once './Engine.php';

class Renault extends Vehicule implements Engine
{

    /**
     * @var string
     */
    private string $carburant;

    public function carburant()
    {
        return 'diesel';
    }

    public function nbTest()
    {
        return parent::nbTest() + 30;
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
    public function start(User $user): string
    {
        return"{$user->getPseudo()} a demarré la Renault";
    }
}
