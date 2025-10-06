<?php
include "connectionOnDatabase.php";
$id = $_GET["id"];
$old = $connection->query("SELECT * FROM news WHERE id=$id AND deleted=0")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>update news</title>
</head>
<body>
<center><h1>Hello in update news page</h1></center>

<center>
  <form action="updateNews_logic.php" method="post">
    <input type="hidden" name="news_id" value="<?php echo $id; ?>">
    <input type="text" name="new_title" placeholder="title" value="<?php echo $old['title']; ?>"><br>
    <input type="text" name="new_category_id" placeholder="category id" value="<?php echo $old['category_id']; ?>"><br>
    <textarea name="new_details" placeholder="details" rows="5" cols="35"><?php echo $old['details']; ?></textarea><br>
    <input type="submit" name="update_news" value="update news">
  </form>
</center>
</body>
</html>
