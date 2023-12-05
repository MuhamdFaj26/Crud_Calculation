<?php


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "calculation";

$connection = new mysqli($servername, $username, $password, $dbName);

if ($connection->connect_error){
    die("Connection Failde :" .$connection->connect_error);
}else{
    echo "Connection Succes";
}

$new = "INSERT INTO user (Nama, Alamat, No_HP) VALUES ('FAJRUL', 'ZUL', '082221480074')";


if($connection->query($new) === true){
    echo "SUCCES";
}else{
    echo "error:" .$new. "<br>" .$connection->error;
}

?>