<?php


$array = [45, 23, 55, 33, 22, 44, 55];
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array) - 1; $j++) {
        if ($array[$j + 1] < $array[$j]) {
            $temp = $array[$j + 1];
            $array[$j + 1] = $array[$j];
            $array[$j] = $temp;
        }
    }
    //echo "<br>";
}

// print_r($array);
// die;

$a = 5;
$b = 6;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
// echo $a;
// echo '<br>';
// echo $b;



$string = 'Suchi';
$reverse = '';
$i = 0;
while (!empty($string[$i])) {
    $reverse = $string[$i] . $reverse;
    $i++;
}
echo $reverse;
