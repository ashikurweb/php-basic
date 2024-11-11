<?php 

$weather = 'cloudy';
$color   = null;

switch ( true ) {
    case $weather == 'sunny';
        $color     = 'blue';
        break;

    case $weather == 'cloudy';
         $color    = 'yellow';
}

echo $color;


echo "<br>";

$result = '';


switch( $number = 3 ) {
    case 1:
        $result = 'One';
        break;
    case 2: 
        $result = 'Two';
        break;
    case 3:
        $result = 'Three';
        break;
    case 4:
        $result = 'Four';
        break;
    
    case 5:
        $result = 'Five';
        break;
        
    default:
        $result = 'Invalid Credientials!';
}

echo $result;