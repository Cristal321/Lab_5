<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db= 'my_base';

$connect = mysqli_connect($host, $username, $password, $db);

if (!$connect) {
    die('Error connect to database!');
}