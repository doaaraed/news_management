<?php
session_start();
include "connectionOnDatabase.php"; 

if ($connection->error == false) {

    if (isset($_POST["add_category"])) {
        $cat_name = $_POST["cat_name"];

        $sql = "INSERT INTO categories (name) VALUES ('$cat_name')";
        $result = $connection->query($sql);

        if ($result == true) {
            echo "DONE";
        } else {
            echo "Faile". $connection->error;
        }
    }
}
?>