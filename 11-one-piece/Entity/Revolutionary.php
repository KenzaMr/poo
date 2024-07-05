<?php
class Revolutionary extends Character implements CombatSkills
{
    public function __construct(string $nom,int $age,int $bounty)
    {
        parent::__construct($nom,$age,$bounty);
    }

    public function getRole(): string
    {
        return "$this->name est un Revolutionnaire";
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
