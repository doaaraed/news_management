<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Add News</title></head>
<body>
<center>
  <h1>Add News</h1>
  <form action="news_add.php" method="post">
    <input type="text" name="title" placeholder="Title"><br>
    <input type="text" name="category_id" placeholder="Category ID"><br>
    <textarea name="details" placeholder="Details" rows="5" cols="35"></textarea><br>
    <input type="text" name="image" placeholder="Image URL"><br><br>
    <input type="submit" name="add_news" value="Add News">
  </form>
</center>
</body>
</html>