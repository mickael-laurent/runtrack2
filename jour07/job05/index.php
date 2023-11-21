<?php

function occurrences($str, $char) {
    // On compte le nombre d'occurrences du caractère dans la chaîne de caractères
    $count = substr_count($str, $char);

    // On retourne le nombre d'occurrences
    return $count;
}

?>