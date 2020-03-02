<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
  </head>
  <body>

    <?php
      class Book {
        var $title;
        var $author;
        var $pages;
      }

      $book1 = new Book;
      $book1->title = "Harry Potter";
      $book1->author = "JK";
      $book1->pages = 400;

      echo $book1->title;

    ?>

  </body>
</html>
