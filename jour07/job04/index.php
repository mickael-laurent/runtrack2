<?php

function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b != 0) {
                return $a / $b;
            } else {
                return 'Erreur : Division par zéro';
            }
        case '%':
            return $a % $b;
        default:
            return 'Erreur : Opération invalide';
    }
}
// Exemple d'utilisation :
echo calcule(5, '+', 3); // Affiche 8
echo calcule(5, '-', 3); // Affiche 2
echo calcule(5, '*', 3); // Affiche 15
echo calcule(5, '/', 3); // Affiche 1.66666666667
echo calcule(5, '%', 3); // Affiche 2
?>