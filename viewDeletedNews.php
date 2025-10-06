<?php
session_start();
include "connectionOnDatabase.php";

$sql = "SELECT n.id, n.title, n.image, c.name AS category
        FROM news n
        JOIN categories c ON c.id = n.category_id
        WHERE n.deleted = 1
        ORDER BY n.id DESC";
$result = $connection->query($sql);

echo $result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>deleted news</title>
</head>
<body>

<table border="1px" width="100%">
  <tr>
    <th>title</th>
    <th>category</th>
    <th>image</th>
  </tr>

  <?php
  if ($result->num_rows != 0) {
    while ($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $row["title"]; ?></td>
        <td><?php echo $row["category"]; ?></td>
        <td>
          <?php if (!empty($row["image"])) { ?>
            <img src="<?php echo $row["image"]; ?>" height="40">
          <?php } ?>
        </td>
      </tr>
  <?php } } ?>
</table>

</body>
</html>
