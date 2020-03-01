<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
  </head>
  <body>

  <form action="site_ass_arrays.php" method="post">
    <input type="text" name="student">
    <input type="submit">
  </form>

  <?php
    $grades = array("Jim" => "A+", "Pam" => "B-", "Karen" => "C+");
    $grades["Jim"] = "B-";
    echo $grades["Jim"];
    echo count($grades);
    echo $grades[$_POST["student"]];
  ?>

  </body>
</html>
