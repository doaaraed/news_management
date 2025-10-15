<?php
include "db_connection.php";
$sql = "SELECT * FROM categories";
$result = $connection->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Categories</title>
</head>
<body>
<center>
<h1>Categories</h1>
<table border="1" width="60%">
  <tr><th>Name</th></tr>
  <?php if ($result->num_rows != 0) { while ($row = $result->fetch_assoc()) { ?>
    <tr><td><?php echo $row["name"]; ?></td></tr>
  <?php }} ?>
</table>
</center>
</body>
</html>
