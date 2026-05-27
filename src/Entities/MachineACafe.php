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
    private string $cafe;
    private bool $enFonction;

    public function __construct(string $marque)
    {
        $this->marque =  $marque;
        $this->cafe =  "";
        $this->enFonction = false;
    }

    public function getMarque(): string
{
    return $this->marque;
}

public function  allumage( bool $enFonction): string
{
    $this->enFonction = $enFonction;
   return "Senseo est en fonction";
}
// c'est la seule méthode qui modifie une propriété ($this)

public function  faireDuCafe(): string
{
   return "Je mets une dosette";
}

public function  mettreUneDosette(): string
{
   return "Le café est prêt !";
}


}

 ?>


