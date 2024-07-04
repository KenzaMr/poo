<?php

final class User
{
    /**
     * @var string
     */
    protected string $pseudo;


    /**
     * Get the value of pseudo
     *
     * @return  string
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @param  string  $pseudo
     *
     * @return  self
     */ 
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }
}
