<?php

// function add ( array $numbers ) {
//     $total = 0;
//     foreach ( $numbers as $number ) {
//         $total += $number;
//     }
//     return $total;
// }

// $numbers = [10, 20, 30, 40];
// echo add( $numbers );


// function add () {
//     $total = 0;

//     foreach(func_get_args() as $number ) {
//         if (!is_numeric( $number )) {
//             continue;
//         }
//         $total += $number;
//     }
//     return $total;
// }

// echo add(1, 2, 3, 4, 5, '1number');


function add ( ) {
    return array_sum( func_get_args() );
}

echo add(1, 2, 3, 4, 5, 15);