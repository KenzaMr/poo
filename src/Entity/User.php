<?php

namespace App\Entity;

final class User
{
    /**
     * @var string
     */
    protected string $pseudo;

    /**
     * @var bool
     */
    protected bool $blesse;
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

    /**
     * Get the value of blesse
     *
     * @return  bool
     */
    public function getBlesse()
    {
        return $this->blesse;
    }

    /**
     * Set the value of blesse
     *
     * @param  bool  $blesse
     *
     * @return  self
     */
    public function setBlesse(bool $blesse)
    {
        $this->blesse = $blesse;

        return $this;
    }
}
