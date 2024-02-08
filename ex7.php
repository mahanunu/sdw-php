<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice sur les Tableaux Associatifs</title>
</head>
<body>

<?php
// Création d'un tableau associatif avec des informations sur une personne
$personne = array(
    "nom" => "PIRES",
    "prenom" => "Mahalia",
    "age" => 23
);

// Affichage des informations
echo "Nom: " . $personne["nom"] . "<br>";
echo "Prénom: " . $personne["prenom"] . "<br>";
echo "Âge: " . $personne["age"];
?>

</body>
</html>
