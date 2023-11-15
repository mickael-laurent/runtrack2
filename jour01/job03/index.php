<?php

?>

<!DOCTYPE html>
<html>
    
    <body>
        <header>
            <?php
            $maxRows = 1;
                echo '<Table>';
                
                echo '<tr><td>Type</td><td>Nom</td><td>Valeur</td></tr>';
                for ($i=1; $i<=$maxRows; $i++)
                {
                    echo "<tr><td>string $i</td><td>mon nom $i</td><td>laurent $i</td></tr>";
                    echo "<tr><td>int $i</td><td>mon age $i</td><td>29 $i</td></tr>";
                    echo "<tr><td>boolen $i</td><td>mon boolen $i</td><td>true $i</td></tr>";
                    echo "<tr><td>float $i</td><td>mon float $i</td><td>6.3 $i</td></tr>";
                }
                echo '</table>';
            ?>
        </header> 
    </body>
</html>