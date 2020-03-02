<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
  </head>
  <body>

<form action="site_calculator_better.php" method="post">
  First number: <input type="number" step="0.01" name="num1"> <br>
  OP: <input type="text" name="op"> <br>
  Second number: <input type="number" step="0.01" name="num2"> <br>
  <input type="submit">
</form>

<?php
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $op = $_POST["op"];

  if($op == "+"){
    echo $num1 + $num2;
  } elseif($op == "-"){
    echo $num1 - $num2;
  } elseif($op == "/"){
    echo $num1 / $num2;
  } elseif($op == "*"){
    echo $num1 * $num2;
  } else {
    echo "Invalid operator";
  }

?>

  </body>
</html>
