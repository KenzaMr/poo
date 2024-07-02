<?php
class Article
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var int
     */
    protected int $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
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
     * Get the value of price
     *
     * @return  int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param  int  $price
     *
     * @return  self
     */
    public function setPrice(int $price)
    {
        $this->price = $price;

        return $this;
    }

    public function displayProduct()
    {
        return "Le produit est $this->name et il coûte $this->price euros";
    }
    
}
