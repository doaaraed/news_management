<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add news</title>
</head>
<body>

<center>
  <h1>Hello in add news page</h1>
</center>

<center>
  <form action="addNews_logic.php" method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="title"><br>
    <input type="text" name="category_id" placeholder="category id"><br>
    <textarea name="details" placeholder="details" rows="5" cols="35"></textarea><br>
      <input type="text" name="image" placeholder="image name or link"><br><br>
    <input type="submit" name="add_news" value="add news">
  </form>
</center>

</body>
</html>
