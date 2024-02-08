<?php
function multiply($a, $b) {
    
    $resultat = 0;

    
    for ($i = 0; $i < $b; $i++) {
        $resultat += $a;
    }

    return $resultat;
}

// Test de la fonction
$a = 4;
$b = 6;
$produit = multiply($a, $b);
echo "Le produit de $a et $b est : $produit";
?>
