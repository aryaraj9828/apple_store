<?php
$host = 'localhost';
$port = '3307';
$user = 'root';
$password = '';
$dbname = 'apple_store';

$conn = new mysqli($host, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>