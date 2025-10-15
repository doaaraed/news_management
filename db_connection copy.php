<?php
$connection = new mysqli("localhost", "root", "", "news_project");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
