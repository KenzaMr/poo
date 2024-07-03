<?php
abstract class Vehicule
{
    /**
     * @var int
     */
    protected int $nbTest = 100;

    final public function demarrer(): string
    {
        return 'Je suis démarré';
    }

    abstract public function carburant();

    public function nbTest(){
        return $this->nbTest;
    }
}
