<?php
require_once './Entity/Revolutionary.php';
class Commander extends Revolutionary
{
    public function leadRevolution(): string
    {
        return "$this->name est le plus ancien revolutionnaire de tous les temps";
    }
}
