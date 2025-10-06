<?php
include "connectionOnDatabase.php";

if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];

    $sql    = "UPDATE news SET deleted = 1 WHERE id = $id";
    $result = $connection->query($sql);

    if ($result == true) {
        header("Location: viewNews.php?deleted=true");
        exit;
    } else {
        header("Location: viewNews.php?deleted=false");
        exit;
    }
}
?>
