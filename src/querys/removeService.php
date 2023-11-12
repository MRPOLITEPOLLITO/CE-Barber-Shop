<?php
require('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["service_id"])) {
        
        $id = $_POST["service_id"];

        $query = "DELETE FROM service WHERE service_id = '$id')";
        $result = $conn->query($query);
        if ($result) {
            header("Location: ../deleteService.php");
            exit();
        } else {
            header("Location: ../deleteService.php");
            exit();
        }
    } else {
        header("Location: ../deleteService.php");
        exit();
    }
}
?>