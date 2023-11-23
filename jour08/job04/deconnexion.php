<?php
// Supprime le cookie en mettant sa date d'expiration dans le passé
setcookie('prenom', '', time() - 3600);
// Redirige vers la page d'accueil ou une autre page après la déconnexion
header('Location: index.php'); // Remplacez index.php par la page souhaitée
exit;
?>