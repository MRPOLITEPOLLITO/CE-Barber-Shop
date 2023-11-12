<?php
require('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "SELECT * FROM user WHERE user_email = '$email' AND user_password = '$password'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $user_level = $row['user_level'];
            }
            session_start();
            $_SESSION["user_email"] = $email;
            $_SESSION["user_id"] = $user_id;
            $_SESSION["user_name"] = $user_name;
            $_SESSION["user_level"] = $user_level;
            header("Location: ../index.php");
            exit();
        } else {
            header("Location: ../login.php");
            exit();
        }
    }
}
?>