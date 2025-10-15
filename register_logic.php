<?php
include "db_connection.php";

function validateData($data) {
  return htmlspecialchars(trim($data));
}

if (isset($_POST["create_account"])) {
  $name = validateData($_POST["name"]);
  $email = validateData($_POST["email"]);
  $password = password_hash(validateData($_POST["password"]), PASSWORD_DEFAULT);

  $sql = "INSERT INTO users(name,email,password) VALUES ('$name', '$email', '$password')";
  if ($connection->query($sql)) {
    header("Location: login.php?statusCode=201");
    exit;
  } else {
    echo "Error: " . $connection->error;
  }
}
?>
