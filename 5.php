<?php

$array = [1,2,3,4,5,2,5,1,6,6];
$removeArray = [];

foreach($array as $value){
    foreach($removeArray as $removeEleme){
        if( $removeEleme == $value){
            continue 2;
        }

    }
    $removeArray[] = $value;
}

echo"this is remove dup array : <br>";
print_r($removeArray);
// print_r(array_unique($array));
?>