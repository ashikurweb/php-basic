<?php

$config = [
    'seperator' => '_',
];

// function fullName ($firstName, $lastName) {
//     global $config;
//     return "{$firstName}{$config['seperator']}{$lastName}" . '<br>';
// }

// echo fullName('Ashikur', 'Rahman');



// function fullName ($firstName, $lastName, $config) {
//     return "{$firstName}{$config['seperator']}{$lastName}". '<br>';
// }

// echo fullName('Sabikun Nahar', 'Priya', $config);


$fullName = function ($firstName, $lastName ) use ( $config ) {
    return "{$firstName}{$config['seperator']}{$lastName}". '<br>';
};

echo $fullName('Emran', 'Hossain');
