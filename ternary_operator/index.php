<?php 

function calculate($a, $b) {
    return $a > $b ? $a : $b;
}

echo calculate(5, 2);
echo "<br>";


$balance = 10;
$availableBalance = $balance ? : 'Zero';
echo $availableBalance;

echo '<br>';


$first_number = 10;
$second_number = 30;

if ($first_number > $second_number) {
    echo $first_number;
} else {
    echo $second_number;
}