
<?php
function puissance($a, $b) {
   
    $resultat = 1;

 
    for ($i = 0; $i < $b; $i++) {
        $resultat *= $a;
    }

   
    return $resultat;
}

// Test de la fonction
$a = 2;
$b = 5;
$puissance = puissance($a, $b);
echo "$a élevé à la puissance $b est : $puissance";
?>