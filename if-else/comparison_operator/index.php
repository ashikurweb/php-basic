<?php 

/**
 * @ Comparison Operator
 * checking equality (==) (===)
 * checking inequality (!=)
 * checking greater than (>)
 * checking less than (<)
 * checking greater than or equal to (>=)
 * checking less than or equal to (<=)
 */

 echo (int) '12';

echo "<br>";    

var_dump((bool ) 'false');

echo "<br>";

$uploaded = false;

if ( $uploaded == true ) {
    echo "Uploaded";
} else {
    echo "Uploaded Failed";
}

echo "<br>";

$roomRequest = 4;
$roomAvilable = 2;

if ( $roomRequest > $roomAvilable ) {
    echo "Room Not Avilable";
}