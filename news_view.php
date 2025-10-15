<?php
session_start();
include "db_connection.php";
$sql = "SELECT n.id, n.title, n.image, c.name AS category FROM news n JOIN categories c ON c.id = n.category_id WHERE n.deleted = 0 ORDER BY n.id DESC";
$result = $connection->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>View News</title></head>
<body>
<?php
if (isset($_GET["deleted"])) echo "<h3>News deleted</h3>";
if (isset($_GET["created"])) echo "<h3>News created</h3>";
if (isset($_GET["updated"])) echo "<h3>News updated</h3>";
?>
<table border="1" width="100%">
<tr><th>Title</th><th>Category</th><th>Image</th><th>Actions</th></tr>
<?php if($result && $result->num_rows>0){ while($row=$result->fetch_assoc()){ ?>
<tr>
<td><?= htmlspecialchars($row["title"]) ?></td>
<td><?= htmlspecialchars($row["category"]) ?></td>
<td><?= $row["image"] ? "<img src='{$row['image']}' height='40'>" : "No image" ?></td>
<td><a href="news_edit.php?id=<?= $row['id'] ?>">Edit</a> | <a href="news_delete.php?id=<?= $row['id'] ?>">Delete</a></td>
</tr>
<?php }} ?>
</table>
</body>
</html>
