<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
        
        <input type="text" id="nombre" name="nombre"> <br/>

        <input type="submit" value="Envoyer">
    </form>
    <?php
    if($_GET['nombre']%2==0 ){
        echo "pair";
    }
    else{
        echo "impair";
    }
    ?>
</body>
</html>