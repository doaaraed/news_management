<?php
include "db_connection.php";
$id = $_GET["id"];
$old = $connection->query("SELECT * FROM news WHERE id=$id AND deleted=0")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Edit News</title></head>
<body>
<center>
<h1>Edit News</h1>
<form action="news_edit_logic.php" method="post">
  <input type="hidden" name="news_id" value="<?php echo $id; ?>">
  <input type="text" name="new_title" value="<?php echo $old['title']; ?>"><br>
  <input type="text" name="new_category_id" value="<?php echo $old['category_id']; ?>"><br>
  <textarea name="new_details" rows="5" cols="35"><?php echo $old['details']; ?></textarea><br>
  <input type="submit" name="update_news" value="Update News">
</form>
</center>
</body>
</html>
