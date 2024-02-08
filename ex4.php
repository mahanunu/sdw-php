<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mineur & Majeur</title>
</head>
<body>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Entrez votre âge: <input type="text" name="age">
    <input type="submit" value="Valider">
</form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];
        if ($age < 18) {
            echo "Vous êtes mineur.";
        } else {
            echo "Vous êtes majeur.";
        }
}

?>
<?php
// sans forum
$age =12;
    if ($age < 18) {
        echo "Vous êtes mineur.";
    } else {
        echo "Vous êtes majeur.";
    };

