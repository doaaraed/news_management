<?php
session_start();
include "connectionOnDatabase.php"; 

$sql    = "SELECT * FROM categories";
$result = $connection->query($sql);

echo $result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>view categories</title>
</head>
<body>

<table border="1px" width="100%">
  <tr>
    <th>name</th>
  </tr>

  <?php
  if ($result->num_rows != 0) {
      while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row["name"]; ?></td>
        </tr>
  <?php } } ?>
</table>

</body>
</html>
