<?php
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) {
        continue; // Ignorer les nombres spécifiques
    }

    echo $i;
    
    // Ajouter un retour à la ligne après chaque nombre, sauf pour le dernier
    if ($i < 1337) {
        echo "<br />";
    }
}
?>