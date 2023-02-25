<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'admin@gmail.com' and $password === 'panda') {
    $_SESSION['user'] = ['name' => 'admin'];
    header('location: ../profile.jpg');
} else {
    header('location: ../index.php?incorrect=1');
}