<?php
require_once './Vehicule.php';
require_once './Engine.php';
class Peugeot extends Vehicule implements Engine
{
    /**
     * @var string
     */
    private string $carburant;

    public function carburant()
    {
        return 'essence';
    }

    public function nbTest()
    {
        return parent::nbTest() + 70;
    }
    public function start(User $user): string
    {
        return"{$user->getPseudo()} a demarré la Peugeot";
    }
}
