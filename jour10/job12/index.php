<?php
// Informations de connexion à la base de données
$serveur = "localhost"; // Serveur de la base de données
$utilisateur = "root"; // Nom d'utilisateur de la base de données
$motDePasse = ""; // Mot de passe de la base de données
$nomBaseDeDonnees = "jour09"; // Nom de la base de données

// Connexion à la base de données
$mysqli = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

// Vérification de la connexion
if ($mysqli->connect_errno) {
    echo "Echec de la connexion à la base de données : " . $mysqli->connect_error;
    exit();
}

// Requête SQL pour récupérer toutes les informations de la table 'etudiants'
$requete = "SELECT prenom, nom, naissance FROM etudiant WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
$resultat = $mysqli->query($requete);

if ($resultat) {
    echo "<table border='1'>";
    echo "<thead><tr>";
    // Affichage des noms des colonnes
    while ($info_colonne = $resultat->fetch_field()) {
        echo "<th>".$info_colonne->name."</th>";
    }
    echo "</tr></thead>";
    echo "<tbody>";
    // Affichage des données
    while ($ligne = $resultat->fetch_assoc()) {
        echo "<tr>";
        foreach ($ligne as $valeur) {
            echo "<td>".$valeur."</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

    // Libération du résultat
    $resultat->free();
} else {
    echo "Erreur dans la requête : " . $mysqli->error;
}

// Fermeture de la connexion
$mysqli->close();
?>