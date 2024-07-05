<?php
require_once './Entity/Marine.php';

class ViceAdmiral extends Marine
{
    public function commandFleet(): string
    {
        return "$this->name :Enchantée je suis le nouveau admiral";
    }
}
