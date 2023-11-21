<?php

$var='ABEGLST';
function leetSpeak($str) {
    $str = str_replace('A', '4', $str);
    $str = str_replace('B', '8', $str);
    $str = str_replace('E', '3', $str);
    $str = str_replace('G', '6', $str);
    $str = str_replace('L', '1', $str);
    $str = str_replace('S', '5', $str);
    $str = str_replace('T', '7', $str);


    return $str;
}
    echo leetSpeak($var);


?>