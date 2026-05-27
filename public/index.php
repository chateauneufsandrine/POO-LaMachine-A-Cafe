<?php 

require_once "../src/Entities/MachineACafe.php";
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



$machine = new MachineACafe("Senseo");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La machine à café est de la marque : <?= $machine->getMarque() ?></h1>
    <h2><?= $machine->allumage(true) ?></h2>
    <h2><?= $machine->mettreUneDosette() ?></h2>
    <h2><?=  $machine->faireDuCafe() ?></h2>
</body>
</html>