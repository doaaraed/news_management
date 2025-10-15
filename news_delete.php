<?php
include "db_connection.php";
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $sql = "UPDATE news SET deleted = 1 WHERE id = $id";
    $result = $connection->query($sql);
    header("Location: news_view.php?deleted=" . ($result ? "true" : "false"));
    exit;
}
?>
