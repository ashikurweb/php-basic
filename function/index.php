<?php


// function fullName ( $first_name, $last_name, $seperator = '' ) {
//     return "{$first_name}{$seperator }{$last_name}";
// }
// $first_name = 'Ashikur';
// $last_name  = 'Rahman';

// $result = fullName( $first_name, $last_name, '_');

// echo $result;


function fullName ( $first_name, $last_name = null, $seperator = '_' ) {
    if (trim( $first_name === '' )) {
        return;
    }
    if ( $last_name === null ) {
        return $first_name;
    }
    return "{$first_name} {$seperator} {$last_name}";
}

echo fullName('Ashik', 'Rahman');