<?php


$servername = "localhost";
$username = "username";
$password = "password";

$connection = new mysqli($servername, $username, $password);

if (!$connection){
    return "salah";
}

?>