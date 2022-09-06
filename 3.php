<?php

for ($i = 1 ; $i<=5 ; $i++){ // y-axis
    for ($j = 1 ; $j<= $i ; $j++){ // x-axis
        echo "*";
    }
    echo "<br>";
}

for ($i = 1 ; $i<=5 ; $i++){ // y-axis
    for ($j = 5 ; $j >= $i ; $j--){ // x-axis
        echo "*";
    }
    echo "<br>";
}

?>