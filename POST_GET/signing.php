<?php 
session_start();
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        echo "Username: {$username} <br>";
        echo "Password: {$password} <br>";
    }
}