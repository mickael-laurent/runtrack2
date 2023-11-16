<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>job01</title>
</head>
<body>
    <?php
    echo "<table>";
     for ($i=1; $i<=1337; $i++){
        if($i==42){
            echo "<tr><td><b><u>$i</u></b></str></td></tr>";
        }
        else{
            echo "<tr><td>$i</td></tr>";
        }
     }

    ?>
</body>
</html>