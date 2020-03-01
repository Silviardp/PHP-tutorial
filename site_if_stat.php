<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
  </head>
  <body>

  <?php
    $isMale = true;
    $isTall = false;
    if ($isMale && $isTall){
      echo "You are a tall male";
    } elseif ($isMale && !$isTall){
      echo "You are a male";
    } else {
      echo "You are not a tall male";
    }
  ?>

  </body>
</html>
