<?php
session_start();
if (!isset($_COOKIE['nbvisites'])) {
       setcookie("nbvisites", 1, time()+3600);  /* expire dans 1 heure */ // ok
       
       $nbvisites = 1;
       var_dump($nbvisites); // ok

       

    }
    else {
        $nbvisites = $_COOKIE['nbvisites'];
       

        $nbvisites = $nbvisites + 1;
        var_dump($nbvisites);

       
    setcookie("nbvisites", $nbvisites, time()+3600);  /* expire dans 1 heure */
  
    }

     


// Vérifie si le bouton "reset" a été soumis
if (isset($_POST['reset'])) {
     
     setcookie("nbvisites", 0, time()+3600);  /* expire dans 1 heure */
     header("Refresh:0"); // Recharge la page pour afficher le compteur réinitialisé
    
    
    exit();
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Nombre de visites : <?php echo $nbvisites; ?></h1>
    <form method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>