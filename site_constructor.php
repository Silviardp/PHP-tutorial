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

        function __construct($aTitle, $aAuthor, $aPages) {
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }
      }
      $book1 = new Book("Harry Potter", "JK", 400);
      $book2 = new Book("Lord of the rings", "Tolkien", 700);

      echo $book1->title;
    ?>

  </body>
</html>
