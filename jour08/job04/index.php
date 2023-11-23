<?php
// Vérifie si le prénom est déjà présent dans les cookies
if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    // Affiche le message de bienvenue et le bouton de déconnexion
    echo "Bonjour $prenom !";
    echo '<form action="deconnexion.php" method="post">';
    echo '<input type="submit" name="deco" value="Déconnexion">';
    echo '</form>';
} else {
    // Si le prénom n'est pas présent, affiche le formulaire de connexion
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérifie si le formulaire a été soumis
        if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
            // Récupère le prénom depuis le formulaire
            $prenom = $_POST['prenom'];
            // Crée un cookie pour stocker le prénom
            setcookie('prenom', $prenom, time() + 3600); // Cookie valable pendant 1 heure
            // Redirige vers la page actuelle pour éviter de re-poster le formulaire
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        } else {
            echo 'Veuillez entrer votre prénom.';
        }
    }
    // Affiche le formulaire de connexion
    echo '<form action="" method="post">';
    echo '<label for="prenom">Prénom :</label>';
    echo '<input type="text" id="prenom" name="prenom">';
    echo '<input type="submit" name="connexion" value="Connexion">';
    echo '</form>';
}
?>
