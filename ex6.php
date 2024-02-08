<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice sur les Manipulations de Chaînes de Caractères</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Entrez votre nom complet : <input type="text" name="nom_complet">
    <input type="submit" value="Afficher en majuscules">
</form>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_complet = $_POST["nom_complet"];

    $nom_complet_maj = ucwords($nom_complet);
    echo "Nom complet avec une majuscule : $nom_complet_majuscules";
}
?>
