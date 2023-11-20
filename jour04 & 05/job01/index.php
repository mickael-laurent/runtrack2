<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="Prenom">Quel est votre prenom:</label>
        <input type="text" id="prenom" name="prenom"> <br/>

        <label for="nom">Quel est votre nom:</label>
        <input type="text" id="nom" name="nom"> <br/>

        <label for="age">Quel est votre age:</label>
        <input type="number" id="age" name="age"> <br/>

        <input type="submit" value="Envoyer">
    </form>
    <?php
    
    $c = 0;
    foreach($_GET as $val){
        $c+=1;
    }
    echo "Le nombre d'argument GET envoyer est : .$c";
    ?>
</body>
</html>