<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Create Account</title>
</head>
<body>
<center>
  <h1>Create Account</h1>
  <form action="createAccount-logic.php" method="post">
    <input type="text"    name="name"     placeholder="name"><br>
    <input type="email"   name="email"    placeholder="email"><br>
    <input type="password"name="password" placeholder="password"><br>
    <br>
    <input type="submit" value="create" name="create_account">
  </form>
  <p><a href="login.php">log in</a></p>
</center>
</body>
</html>
