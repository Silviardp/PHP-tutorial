<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
  </head>
  <body>

<?php
$phrase = "Giraffe Academy";

// basic functions

  echo strtolower($phrase);
  echo strtoupper($phrase);
  echo strlen($phrase);
  echo $phrase[0];
  echo str_replace("Giraffe", "Panda", $phrase);
  echo substr($phrase, 8, 3);

?>
  </body>
</html>
