<?php

    $str="I'm sorry Dave I'm afraid I can't do that";
    $voyelles=['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U'];

    for($i=0; $i<strlen($str); $i++){

        for($y=0; $y<count($voyelles); $y++){

            if($str[$i]==$voyelles[$y]){
                echo $str[$i];
            }
        }
    }

    
?>