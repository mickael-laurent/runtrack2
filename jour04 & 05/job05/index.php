<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        
        <input type="text" id="username" name="username"> <br/>
 
        <input type="text" id="password" name="password"> <br/>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    if($_POST['username']=='John' && $_POST['password']=='Rambo'){
        echo "C'est pas ma guerre";
    }
    else{
        echo "Votre pire cauchemar";
    }
    ?>
    
</body>
</html>