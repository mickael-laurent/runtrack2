<html>
    <head>
        <meta charset=utf8>
        <meta lang=fr>
    </head>
    <body>

        <!--
            Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
            “hauteur” et un bouton submit.
        -->

        <form action="" method="GET" class="formcol">

            <label for="hauteur">Hauteur : </label>
            <input type="text" name="hauteur" id="hauteur">

            <br>

            <label for="largeur">Largeur : </label>
            <input type="text" name="largeur" id="largeur">

            <br>

            <input type="submit" value="Envoyer!">

        </form>

        <?php
    
            for($i=1; $i<=$_GET['hauteur']; $i++){
                for($y=0; $y<=$_GET['largeur']/2-$i; $y++){
                    echo '&nbsp';
                }
                echo '/';
                for($j=1; $j<$i; $j++){
                    echo '_';
                }
                echo '\\<br>';
            }
            
            for($i=1; $i<=$_GET['hauteur']; $i++){
                echo '|';
                for($j=0; $j<=$_GET['largeur']; $j++){
                    echo "&nbsp";
                }
                echo '|<br>';
            }

            for($j=0; $j<=$_GET['largeur']/2; $j++){
                echo '_';
            }

     
        ?>

    </body>

</html>