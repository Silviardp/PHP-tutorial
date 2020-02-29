<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
  </head>
  <body>

<?php
  echo 5.7 * 9;
  echo 10 % 3; // remainder of a division
  echo 4 + 5 * 10; // order of operation - multiplication then addition
   $num = 10;
   $num++;
   $num--;
   $num += 25;
   $num -= 10;
   $num *= 2;
  echo $num;

  // functions // snippets of code
  // we can use a lot of math functions in PHP

  echo abs(-100); // absolute
  echo pow(2, 4); // 2^4
  echo sqrt(144); // 12 - square root of a number
  echo max(2, 10); // which of these 2 numbers is bigger
  echo min(2, 10);
  echo round(3.2); // rounded down to 3
  echo round(3.7); // rounded up to 4
  echo ceil(3.3); // ALWAYS rounded up -> 4
  echo floor(3.9); // ALWAYS rounded down -> 3


?>
  </body>
</html>
