<?php

$str="On n'est pas le meilleur quand on le croit mais quand on le sait";
$dic=['voyelles' => 0, 'consonnes' => 0];
$voyelles=['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
$consonnes=['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z',
        'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'];

echo "<table><tr><th>Voyelles</th><th>Consonnes</th></tr>";


for($i=0; $i<strlen($str); $i++){
    if(in_array($str[$i], $consonnes)){
        $dic['consonnes']+=1;
    }
    if(in_array($str[$i], $voyelles)){
        $dic['voyelles']+=1;
    }
}
echo "<tr><td>".$dic['voyelles']."</td><td>".$dic['consonnes']."</td></tr></table>";

?>