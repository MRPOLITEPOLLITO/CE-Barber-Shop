<?php
require('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password1"]) && isset($_POST["password2"]) && isset($_POST["phone"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password1"];
        $phone = $_POST["phone"];
        $query = "INSERT INTO user (user_name, user_email, user_password, user_phone) VALUES ('$name', '$email', '$password', '$phone')";
        $result = $conn->query($query);
        if ($result) {
            header("Location: ../login.php");
            exit();
        } else {
            header("Location: ../signup.php");
            exit();
        }
    } else {
        header("Location: ../signup.php");
        exit();
    }
}
?>