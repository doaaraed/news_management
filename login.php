<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Login</title></head>
<body>
<center>
  <h1>Login</h1>
  <?php if(isset($_GET["statusCode"]) && $_GET["statusCode"]=="201") echo "<p>Account created successfully!</p>"; ?>
  <form action="login_logic.php" method="post">
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" name="login" value="Login">
  </form>
</center>
</body>
</html>
