<?php
include "connectionOnDatabase.php";

if ($connection->error == false) {
  if (isset($_POST["update_news"])) {
    $id          = $_POST["news_id"];
    $new_title   = $_POST["new_title"];
    $new_cat_id  = $_POST["new_category_id"];
    $new_details = $_POST["new_details"];

    $sql = "UPDATE news
            SET title='$new_title', category_id='$new_cat_id', details='$new_details'
            WHERE id=$id";
    $result = $connection->query($sql);

    if ($result == true) {
      header("Location: viewNews.php?updated=true");
      exit;
    } else {
      echo "Faile";
    }
  }
}
?>
