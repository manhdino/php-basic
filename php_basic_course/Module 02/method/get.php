<?php
/*
 * Query String: username=hoangan&email=hoangan.web@gmail.com
 *
 * */

echo '<pre>';
print_r($_GET);
echo '</pre>';
$_GET['username'] = 'unicode';

if (isset($_GET['username'])){
    $username = $_GET['username'];
}

if (isset($_GET['email'])){
    $email = $_GET['email'];
}

if (isset($_GET['age']) && is_numeric($_GET['age'])){
    $age = $_GET['age'];
}

echo 'Username: '.$username.'<br/>';
echo 'Email: '.$email.'<br/>';
echo 'Age: '.$age.'<br/>';