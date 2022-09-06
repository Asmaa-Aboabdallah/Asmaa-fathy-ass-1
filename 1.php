<?php


$array = array(20,2,3,4,5,6);
// echo min($array);
// echo max($array);

$min = $array[0];
$max = $array[5];
foreach ($array as $num) {
    if ($num < $min){
        $min = $num;
    }elseif ($num > $max){
        $max = $num;
    }
}
echo $min;
echo $max;




?>
