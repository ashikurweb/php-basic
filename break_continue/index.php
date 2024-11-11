<?php

// $users = [
//     ['username' => 'Priya'],
//     ['username' => 'Ashik'],
//     ['username' => 'Emran'],
//     ['username' => 'Shoriful'],
//     ['username' => 'Rasel'],
//     ['username' => 'Saddam'],
//     ['username' => 'Hasinur']
// ];

/**
 * Break
 */ 

// $toFine = 'Ashik';
// $result = null;

// foreach ( $users as $user ) {
//     if ( $user['username'] === $toFine ) {
//         $result = $user;
//         break;
//     }
// }
// echo "<pre>"; 
// var_dump( $result );
// echo "</pre>";


/**
 * Continue
 */ 

// $toSkip = 'Rasel';

// foreach ( $users as $user ) {
//     if ( $user['username'] === $toSkip ) {
//         continue;
//     }
//     echo $user['username'] . '<br>';
// }


$users = [
    [
        'username' => 'alex',
        'likes' => ['cats', 'food'],
    ],
    [
        'username' => 'billy',
        'likes' => ['cats', 'code', 'food'],
    ],
    [
        'username' => 'dale',
        'likes' => ['code', 'cats', 'music']
    ]
];

$toFind = 'code';
$result = null;

foreach ( $users as $user ) {
    foreach ( $user['likes'] as $like ) {
        if ( $like === $toFind ) {
            $result = $user;
            break 2;
        }
    }
}
echo "<pre>";
var_dump( $result );
echo "</pre>";