<?php 

$users = [
    [
        'username'  => 'alex',
        'email'     => 'alex@gmail.com',
        'likes'     => ['php', 'laravel', 'nodejs']
    ],
    [
        'username'  => 'billy',
        'email'     => 'billy@gmail.com',
        'likes'     => ['php', 'js', 'css']
    ]
];

# adding new array last index
$users[] = [
    'username'  => 'williams',
    'email'     => 'williams@gmail.com',
    'likes'     => ['php', 'laravel', 'nodejs']
];


foreach ( $users as $user ) {
   echo '<pre>';
   var_dump( $user );
   echo '</pre>';
}

// echo "<pre>";
// var_dump( $users );
// echo "</pre>";
