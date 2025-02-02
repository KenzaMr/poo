<?php
abstract class Player
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var int
     */
    protected int $life = 100;

    /**
     * @var int
     */
    protected int $score = 0;

    protected function __construct($noms)
    {
        $this->name = $noms;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of life
     *
     * @return  float
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @param  float  $life
     *
     * @return  self
     */
    public function setLife(float $life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get the value of score
     *
     * @return  int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set the value of score
     *
     * @param  int  $score
     *
     * @return  self
     */
    public function setScore(int $score)
    {
        $this->score = $score;

        return $this;
    }

    abstract protected function hit();
}
