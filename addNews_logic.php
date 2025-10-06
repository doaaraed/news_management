<?php
session_start();
include "connectionOnDatabase.php";

if ($connection->error == false) {
  if (isset($_POST["add_news"])) {
    $title       = $_POST["title"];
    $category_id = $_POST["category_id"];
    $details     = $_POST["details"];
        $image_path  = $_POST["image"]; 
    $user_id     = $_SESSION["authUser"]["id"];
        $result = $connection->prepare(
      "INSERT INTO news (title, category_id, details, image, user_id, deleted)
       VALUES (?, ?, ?, ?, ?, 0)"
    );
    $result->bind_param("sisss", $title, $category_id, $details, $image_path, $user_id);

    if ($result->execute()) {
      header("Location: viewNews.php?created=true");
      exit;
    } else {
      echo "Fail: " . $connection->error;
    }
  }
}
?>
   
  
