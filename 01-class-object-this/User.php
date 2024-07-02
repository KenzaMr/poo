<?php
// Une classe est un modéle qui permet de créer des objects.
// Une classe esr un plan de construction d'objects.
// Une classe esr composée de propriétes et de méthodes.
// Une classe est un modéle de données. 
class User
{
    // Une propriété est une variable définis dans une classe .
    // Une méthode est une fonction définie dans une classe .

    /**
     * Le nom de l'utilisateur
     * 
     * @var string
     */
    public string $firstName; //C'est une propriété

    /**
     * Le nom de famille de l'user
     * @var string
     */
    public string $lastName;
    //Donnez une propriété email, password, age(entier), notes

    /**
     * l'email de l'user
     * @var string
     */
    public string $email;

    /**
     * Le mot de passe de l'user
     * @var string
     */
    public  string $password;

    /**
     * L'age de l'user 
     * @var int
     */
    public int $age;

    /**
     * Les notes de l'user 
     * @var array
     */
    public array $notes;

    /**
     * @return string
     */
    public function bonjour(): string //Une méthode
    {
        return "bonjour, je m'appelle $this->firstName $this->lastName ";
    }
    //Créer une fonction présentation 
    //Qui va retourner une chaine de caractére, "Bonjour, je m'appelle XXX et j'ai XXX ans"
    // La fonction prend en parametre un age et c'est lui que j'affiche 

    /** 
     * @param int $age
     * @return string
     */
    public function presentation(int $age):string
    {
        return $this->bonjour()."et j'ai $age ans";
    }
}


