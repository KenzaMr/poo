<?php

class CharacterManager
{
    private array $listCharacters;

    public function addCharacter(Character $character)
    {
        $this->listCharacters = [$character];
    }

    public function listCharacters()
    {
        foreach($this->listCharacters as $character){
            return $character;
        }
    }
}
