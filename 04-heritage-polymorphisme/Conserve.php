<?php
class Conserve extends Article
{
    /**
     * @var array
     */
    private array $listeExcipient;

    // Créer un constructeur de conserve
    public function __construct(string $name, int $price,array $listeExcipient)
    {
        parent::__construct($name,$price);
        $this->listeExcipient =$listeExcipient;
    }

    /**
     * Get the value of listeExcipient
     *
     * @return  array
     */ 
    public function getListeExcipient()
    {
        return $this->listeExcipient;
    }

    /**
     * Set the value of listeExcipient
     *
     * @param  array  $listeExcipient
     *
     * @return  self
     */ 
    public function setListeExcipient(array $listeExcipient)
    {
        $this->listeExcipient = $listeExcipient;

        return $this;
    }
    // creer une nouvelle méthode qui affiche la liste des excipients 
    // La liste des excipient est XXXXX XXX
    // "Dans le produit XXX , la liste des excipient est"

    public function methode()
    {
        $nouvelleListe=implode(" ",$this->listeExcipient);
        return"Dans le produit $this->name, la liste des excipients est $nouvelleListe";
    }

}
