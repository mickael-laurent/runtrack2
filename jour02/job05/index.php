<?php 

    echo "<table>";
    for ($i=1; $i<=1000; $i++){

        $c2= 2;
        $premier= true;

        for ($j=1; $j<$i-1; $j++){

            if ($i%$c2==0){
                $premier=false;
            }
            $c2=$c2+1;
        }

        if ($premier==true) {
            echo "<tr><td>$i</td></tr>";
        }

    }
    ?>