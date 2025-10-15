<?php
session_start();
include "db_connection.php";

if (isset($_POST["login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = $connection->query($sql);

  if ($result && $result->num_rows > 0) {
    $data = $result->fetch_assoc();
    if (password_verify($password, $data["password"])) {
      $_SESSION["authUser"] = $data;
      header("Location: dashboard.php");
      exit;
    } else echo "Invalid password";
  } else echo "User not found";
}
?>
