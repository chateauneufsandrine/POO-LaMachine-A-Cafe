<?php

// Créer un fichier MachineACafe.php
// Créer la classe MachineACafe
// La machine doit avoir au minimum 3 attributs privés et 3 fonctions publiques :
// Les attributs : marque, cafe, enFonction.
// Les méthodes : allumage(), faireDuCafe(), mettreUneDosette().
// Utiliser la méthode magique __construct() pour définir la marque de la machine.

// Écrire le code des fonctions pour arriver à ce résultat :

// $machine = new MachineACafe("Senseo");
// $machine->allumage(true);
// $machine->mettreUneDosette();
// $machine->faireDuCafe();
// Output:
// Senseo est en fonction.
// Je mets une dosette.
// Le café est prêt !


class MachineACafe
{
    private string $marque;
    private bool $dosette;
    private bool $enFonction;

    public function __construct(string $marque)
    {
        $this->marque =  $marque;
        $this->dosette =  false;
        $this->enFonction = false;
    }


    // c'est la seule méthode qui modifie une propriété ($this)

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function  allumage(): string
    {
        if ($this->enFonction === false) {
            $this->enFonction = true;
            return "$this->marque est en fonction";
        } else {
            $this->enFonction = false;
            return "$this->marque s'éteint";
        }
    }


    public function  mettreUneDosette(): string
    {
        if ($this->dosette === false) {
            $this->dosette = true;
            return "Je mets une dosette";
        } else {
            $this->dosette = false;
            return "J'enlève la dosette";
        }
    }


    public function faireDuCafe(): string
    {
        if ($this->enFonction === true && $this->dosette === true) {
            $this->dosette = false;
            return "Le café est prêt !";
        } else {
            return "la machine doit être allumée et mettre une dosette !";
        }
    }
}
