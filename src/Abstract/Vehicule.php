<?php

namespace App\Abstract;

use App\Entity\User;

abstract class Vehicule
{
    /**
     * @var int
     */
    protected int $nbTest = 100;

    protected bool $accidentVoiture;

    final public function demarrer(): string
    {
        return 'Je suis démarré';
    }

    abstract public function carburant(): string;

    public function nbTest()
    {
        return $this->nbTest;
    }

    public function accident(User $user, bool $accidentVoiture)
    {
        $user->setBlesse(true);
    }
}
