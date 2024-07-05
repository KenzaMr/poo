<?php
require_once './Abstract/Character.php';
require_once './Utilitaire/CombatSkills.php';
// namespace App\Entity;

class Pirate extends Character implements CombatSkills
{
    public function __construct(string $nom,int $age,int $bounty)
    {
        parent::__construct($nom,$age,$bounty);
    }

    public function getRole(): string
    {
        return "$this->name est un Pirate" ;
    }

    public function attack():string
    {
        return'';
    }

    public function defend():string
    {
        return'';
    }
}
