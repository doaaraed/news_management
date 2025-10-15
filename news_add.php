<?php
session_start();
include "db_connection.php";

if (!$connection->connect_error && isset($_POST["add_news"])) {
    $title = $_POST["title"];
    $category_id = $_POST["category_id"];
    $details = $_POST["details"];
    $image_path = $_POST["image"];
    $user_id = $_SESSION["authUser"]["id"];

    $stmt = $connection->prepare("INSERT INTO news (title, category_id, details, image, user_id, deleted) VALUES (?, ?, ?, ?, ?, 0)");
    $stmt->bind_param("sisss", $title, $category_id, $details, $image_path, $user_id);

    if ($stmt->execute()) {
        header("Location: news_view.php?created=true");
        exit;
    } else {
        echo "Error: " . $connection->error;
    }
}
?>