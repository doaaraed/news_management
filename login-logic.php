<?php
session_start();
include "connectionOnDatabase.php";

if ($connection->error == false) {
  if (isset($_POST["login"])) {
    $email    = $_POST["email"];
    $password = $_POST["password"];

    $sql    = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = $connection->query($sql);

    if ($result && $result->num_rows > 0) {
      $data = $result->fetch_assoc();

      if (password_verify($password, $data["password"])) {
        $_SESSION["authUser"] = $data;   
        header("Location:dashboard.php");
        exit;
      } else {
        echo "login faile";
      }
    } else {
      echo "login faile";
    }
  }
}
?>
