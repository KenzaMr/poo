<?php
abstract class Bd
{
    /**
     * @var string
     */
    protected string $nom;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var int
     */
    protected int $dateParution;

    /**
     * @var string
     */
    protected string $auteur; 

    public function __construct(string $name,string $description,int $date,string $auteur)
    {
        $this->nom=$name;
        $this->description=$description;
        $this->dateParution=$date;
        $this->auteur=$auteur;
    }

    /**
     * Get the value of nom
     *
     * @return  string
     */ 
    public function getNom():string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string  $nom
     *
     * @return  self
     */ 
    public function setNom(string $nom): self 
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return  string
     */ 
    public function getDescription(): string 
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */ 
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of dateParution
     *
     * @return  int
     */ 
    public function getDateParution(): int
    {
        return $this->dateParution;
    }

    /**
     * Set the value of dateParution
     *
     * @param  int  $dateParution
     *
     * @return  self
     */ 
    public function setDateParution(int $dateParution): self
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    /**
     * Get the value of auteur
     *
     * @return  string
     */ 
    public function getAuteur():string 
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @param  string  $auteur
     *
     * @return  self
     */ 
    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }
}
