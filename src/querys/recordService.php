<?php
require('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["service_name"]) && isset($_POST["service_description"]) && isset($_POST["service_cost"]) && isset($_FILES["service_image"]) && $_FILES["service_image"]["error"] == 0) {
        
        $name = $_POST["service_name"];
        $description = $_POST["service_description"];
        $cost = $_POST["service_cost"];

        $image = $_FILES["service_image"]["tmp_name"];
        $imageData = file_get_contents($image);
        $imageData = base64_encode($imageData);

        $query = "INSERT INTO service (service_name, service_description, service_cost, service_icon) VALUES ('$name', '$description', '$cost', '$imageData')";
        $result = $conn->query($query);
        if ($result) {
            header("Location: ../addService.php");
            exit();
        } else {
            header("Location: ../addService.php");
            exit();
        }
    } else {
        header("Location: ../addService.php");
        exit();
    }
}
?>