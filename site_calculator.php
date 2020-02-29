<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
  </head>
  <body>


<!--html form -->

<form action="site_calculator.php" method="get">
  <input type="number" name="num1">
  <br>
  <input type="number" name="num2">
  <br>
  <input type="submit">
</form>
<br>

<!-- get info with PHP -->

Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>

  </body>
</html>
