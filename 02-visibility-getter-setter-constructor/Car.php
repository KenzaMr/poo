<?php

class Car
{
    /**
     * @var string
     */
    private string $model;

    /**
     * @var string
     */
    private string $color = 'rose';

    /**
     * @var int
     */
    private int $date = 2055;


    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     * 
     * @return self
     */
    public function setModel(string $model): self
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * 
     * @return self
     */
    public function setColor(string $color): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @param int $date
     * 
     * @return self
     */
    public function setDate(int $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function display(): string
    {
        return "Ce vehicule est une $this->model de couleur $this->color sortie en $this->date";
    }
}
