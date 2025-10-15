<?php
session_start();
if (!isset($_SESSION["authUser"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
</head>
<body>
<center>
  <h1>Welcome <?php echo $_SESSION["authUser"]["name"]; ?></h1>
  <p>
    <a href="category_add.php">Add Category</a> |
    <a href="category_view.php">View Categories</a> |
    <a href="news_add.php">Add News</a> |
    <a href="news_view.php">View News</a> |
    <a href="news_deleted.php">View Deleted News</a>
  </p>
</center>
</body>
</html>
