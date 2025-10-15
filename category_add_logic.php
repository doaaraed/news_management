<?php
include "db_connection.php"; 

if (!$connection->connect_error) {
    if (isset($_POST["add_category"])) {
        $cat_name = $_POST["cat_name"];
        $sql = "INSERT INTO categories (name) VALUES ('$cat_name')";
        $result = $connection->query($sql);

        if ($result == true) {
            echo "Category added successfully";
        } else {
            echo "Failed: " . $connection->error;
        }
    }
}
?>