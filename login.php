<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>
<body>
  <center>
    <h1>Hello in login page</h1>
        <?php
            if(isset($_GET["statusCode"])){
                if($_GET["statusCode"]=="201"){
                    echo "<br> Account Created </br>";
                }
            }
        ?>
    <form action="login-logic.php" method="post">
      <label>email</label>
      <input type="email" name="email"><br>

      <label>password</label>
      <input type="password" name="password"><br><br>

      <input type="submit" name="login" value="login">
    </form>

    <!-- <div style="color:red;">
      </?//php echo $msg; ?> -->
    <!-- </div> --> 
   
  </center>
</body>
</html>