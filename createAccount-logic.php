<?php
include "connectionOnDatabase.php";

function validateData($data){
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($connection->error == false) {
  if (isset($_POST["create_account"])) {
    $name     = validateData($_POST["name"]);
    $email    = validateData($_POST["email"]);
    $password = password_hash(validateData($_POST["password"]), PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(name,email,password)
            VALUES ('$name', '$email', '$password')";
    $result = $connection->query($sql);

    if ($result == true) {
      header("Location:login.php?statusCode=201");
      exit;
    } else {
      echo "fail";
    }
  }
}
?>
