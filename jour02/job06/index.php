<?php

    $h=10;
    $w=20;

    for($i=1; $i<=$w; $i++){
        echo "_";
    }
    echo "<br>";
    for($i=1; $i<=$h; $i++){
        echo "|";
        for($y=1; $y<=$w*2; $y++){
            echo "&nbsp";
        }
        echo "|";
        echo "<br>";
    }
    for($i=1; $i<=$w; $i++){
        echo "_";
    }
?>