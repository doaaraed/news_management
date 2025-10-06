<?php
session_start();
include "connectionOnDatabase.php";

$sql = "SELECT n.id, n.title, n.image, c.name AS category
        FROM news n
        JOIN categories c ON c.id = n.category_id
        WHERE n.deleted = 0
        ORDER BY n.id DESC";
$result = $connection->query($sql);

echo ($result) ? $result->num_rows : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>view news</title>
</head>
<body>

<?php
if (isset($_GET["deleted"]) && $_GET["deleted"]=="true") echo "<h2> deleted </h2>";
if (isset($_GET["created"]) && $_GET["created"]=="true") echo "<h2> created </h2>";
if (isset($_GET["updated"]) && $_GET["updated"]=="true") echo "<h2> updt </h2>";
?>

<table border="1px" width="100%">
  <tr>
    <th>title</th>
    <th>category</th>
    <th>image</th>
    <th>operations</th>
  </tr>
  <?php if($result && $result->num_rows!=0){ while($row=$result->fetch_assoc()){ ?>
    <tr>
      <td><?php echo $row["title"]; ?></td>
      <td><?php echo $row["category"]; ?></td>
      <td><?= htmlspecialchars($row["image"] ?: "No Image") ?></td>

      <td>
        <a href="updateNews.php?id=<?php echo $row['id']; ?>">edit</a> |
        <a href="deleteNews.php?id=<?php echo $row['id']; ?>">delete</a>
      </td>
    </tr>
  <?php } } ?>
</table>

</body>
</html>
