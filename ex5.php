<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice sur les puissances</title>
</head>
<body>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Entrez la base : <input type="text" name="base">
    Entrez l'exposant : <input type="text" name="exposant">
    <input type="submit" value="Calculer">
</form>

</body>
</html>
<?php
function calculerPuissance($nombre, $puissance) {
    return pow($nombre, $puissance);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = $_POST["base"];
    $exposant = $_POST["exposant"];
    if (is_numeric($base) && is_numeric($exposant)) {
        $base = floatval($base);
        $exposant = floatval($exposant);
        $resultat = calculerPuissance($base, $exposant);
        echo "Le résultat de $base^$exposant est : $resultat";
    } else {
        echo "Veuillez entrer des valeurs numériques valides.";
    }
}
?>
 