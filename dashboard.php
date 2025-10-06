<?php
session_start();
include "connectionOnDatabase.php";
$sql = "SELECT n.id, n.title, n.image, c.name AS category
        FROM news n
        JOIN categories c ON c.id = n.category_id
        WHERE n.deleted = 0
        ORDER BY n.id DESC";
$result = $connection->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
<center>
  <h1>Hello <?php echo $_SESSION["authUser"]["name"]; ?> in dashboard</h1>

  <p>
    <a href="addcategory.php">Add Category</a> |
    <a href="viewCategory.php">View category </a> |
    <a href="addNews_ui.php">Add news</a> |
    <a href="viewNews.php">View news</a> |
    <a href="viewDeletedNews.php">view news are deleted</a>
  </p>

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
        <td><?php if(!empty($row["image"])) { ?><img src="<?php echo $row["image"]; ?>" height="40"><?php } ?></td>
        <td>
          <a href="updateNews.php?id=<?php echo $row['id']; ?>">edit</a> |
          <a href="deleteNews.php?id=<?php echo $row['id']; ?>">delete</a>
        </td>
      </tr>
    <?php } } ?>
  </table>
</center>
</body>
</html>
