<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichez un message de bienvenue avec une variable</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Entrez votre prénom: <input type="text" name="prenom">
    <input type="submit" value="Valider">
</form>

</body>
</html>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $prenom = $_POST["prenom"];
    echo "Bienvenue, $prenom !";
}
?>
<?php
//sans le form
$prenom = "maha";
echo 'Bonjour ';
echo $prenom;
echo ' !';
?>