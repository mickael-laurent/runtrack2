$h=50;
    $c=0;

    for($i=1; $i<=$h; $i++){
        for($y=1; $y<=$h-$c; $y++){
            echo "&nbsp";
        }
        echo "/";
        for($y=1; $y<=$c; $y++){
            echo "&nbsp&nbsp";
        }
        echo "\\";
        echo "<br>";
        $c=$c+1;
    }

    for($i=1; $i<=$c; $i++){
        echo "_";
    }

?>

