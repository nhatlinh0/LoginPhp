<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'login';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error) {
    echo 'Failed to connect DB '. $conn->connection_error;
}
?>