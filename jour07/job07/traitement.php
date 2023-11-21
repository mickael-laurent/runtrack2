<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];
    
    switch ($fonction) {
        case "gras":
            echo gras($str);
            break;
        case "cesar":
            echo cesar($str);
            break;
        case "plateforme":
            echo plateforme($str);
            break;
        default:
            echo "Fonction non reconnue";
    }
}

function gras($str) {
    // Appliquer le texte en gras
    $mots = explode(' ', $str);
    foreach ($mots as &$mot) {
        if (ctype_upper(substr($mot, 0, 1))) {
            $mot = "<b>$mot</b>";
        }
    }
    return implode(' ', $mots);
}

function cesar($str, $decalage = 2) {
    // Appliquer le chiffrement César
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $offset = ($ascii <= 90) ? 65 : 97;
            $result .= chr(($ascii - $offset + $decalage) % 26 + $offset);
        } else {
            $result .= $char;
        }
    }
    return $result;
}

function plateforme($str) {
    // Ajouter "_" aux mots finissant par "me"
    $mots = explode(' ', $str);
    foreach ($mots as &$mot) {
        if (substr($mot, -2) === "me") {
            $mot .= "_";
        }
    }
    return implode(' ', $mots);
}
?>