<?php
include "db_connection.php";
if (isset($_POST["update_news"])) {
    $id = $_POST["news_id"];
    $title = $_POST["new_title"];
    $cat_id = $_POST["new_category_id"];
    $details = $_POST["new_details"];

    $sql = "UPDATE news SET title='$title', category_id='$cat_id', details='$details' WHERE id=$id";
    if ($connection->query($sql)) {
        header("Location: news_view.php?updated=true");
    } else {
        echo "Error: " . $connection->error;
    }
}
?>
