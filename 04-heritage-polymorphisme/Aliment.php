<?php
// créer une class Aliment qui herite de Article
// datePrememption
// getter setter constructeur
// methode DisplayProduct qui affiche:
// "Le produit est : xxxx et il coute xxx euros et la date de peremption est le XXXX"
class Aliment extends Article
{
    /**
     * @var int
     */
    protected int $datePeremption;
    
    public function __construct(string $name, int $price,int $date)
    {
        parent::__construct($name,$price);
        $this->datePeremption =$date;
    }

    /**
     * Get the value of datePeremption
     *
     * @return  string
     */ 
    public function getDatePeremption()
    {
        return $this->datePeremption;
    }

    /**
     * Set the value of datePeremption
     *
     * @param  string  $datePeremption
     *
     * @return  self
     */ 
    public function setDatePeremption(string $datePeremption)
    {
        $this->datePeremption = $datePeremption;

        return $this;
    }

    public function displayProduct()
    {
        return parent::displayProduct(). "la date de peremeption est le $this->datePeremption";
    }
}
