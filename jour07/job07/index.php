<!DOCTYPE html>
<html>
<head>
    <title>Transformations de texte</title>
</head>
<body>

<form action="traitement.php" method="post">
    <label for="str">Texte :</label>
    <input type="text" id="str" name="str"><br><br>
    
    <label for="fonction">Choisir une fonction :</label>
    <select id="fonction" name="fonction">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select><br><br>
    
    <button type="submit">Soumettre</button>
</form>



</body>
</html>