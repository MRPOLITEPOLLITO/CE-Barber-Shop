<?php
require('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["review"]) && isset($_POST["score"]) && isset($_POST["user_id"])) {
        
        $review = $_POST["review"];
        $score = $_POST["score"];
        $user_id = $_POST["user_id"];
        $query = "INSERT INTO review (user_id, review_score, review_text) VALUES ('$user_id', '$score', '$review')";
        $result = $conn->query($query);
        if ($result) {
            header("Location: ../index.php");
            exit();
        } else {
            header("Location: ../index.php");
            exit();
        }
    } else {
        header("Location: ../index.php");
        exit();
    }
}
?>