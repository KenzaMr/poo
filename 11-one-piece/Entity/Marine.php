<?php
require_once './Abstract/Character.php';
require_once './Utilitaire/CombatSkills.php';

class Marine extends Character implements CombatSkills
{
    public function __construct(string $nom,int $age,int $bounty)
    {
        parent::__construct($nom,$age,$bounty);
    }

    public function getRole(): string
    {
        return "$this->name est un Marin ";
    }

    public function attack():string
    {
        return'';
    }

    public function defend(): string
    {
        return'';
    }
}
