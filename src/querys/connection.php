<?php
$servername = "mysql";
$username = "root";
$password = "123456";
$database = "barber";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    echo"". $conn->connect_error;
    die("Conexión fallida: " . $conn->connect_error);
}
?>