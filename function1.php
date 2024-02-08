<?php
function additionner($a, $b) {
    
    $resultat = $a;

   
    while ($resultat < $a + $b) {
        $resultat++;
    }

   
    return $resultat;
}

// Test de la fonction
$a = 3;
$b = 6;
$somme = additionner($a, $b);
echo "La somme de $a et $b est : $somme";
?>
