<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
  </head>
  <body>


<!--html form -->

<form action="site_user_input.php" method="get">
  Name:<input type="text" name="username">
  <br>
  Age:<input type="number" name="age">
  <input type="submit">
</form>
<br>

<!-- get info with PHP -->

Your name is <?php echo $_GET["username"] ?>
<br>
Your age is <?php echo $_GET["age"] ?>
  </body>
</html>
