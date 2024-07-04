<?php

namespace App\Entity;

use App\Entity\User;
use App\Abstract\Vehicule;
use App\Utilitaire\Engine;

class Peugeot extends Vehicule implements Engine
{
    /**
     * @var string
     */
    private string $carburant;

    public function carburant(): string
    {
        return 'essence';
    }

    public function nbTest()
    {
        return parent::nbTest() + 70;
    }
    public function start(User $user): string
    {
        return "{$user->getPseudo()} a demarré la Peugeot";
    }
}
