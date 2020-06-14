<?php
const DB_HOST = 'localhost';
const DB_LOGIN = 'root';
const DB_PASSWORD = 'root';
const DB_NAME = 'bookdb';

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

function selectAllBooks()
{
  global $link;
  //Как правильно составлять запрос чтобы данные приходили с разных таблиц и правильно ссылались по вторичному ИД?
  $sql = 'SELECT books.*, authors.name FROM books LEFT JOIN authors ON books.AuthorId = authors.id';
  if(!$result = mysqli_query($link, $sql)) return false;
  $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);

  $authors = [];
  foreach($books as $book){
    $authors[$book['name']][] = $book['Title'];
  }

  return ['books' => $books, 'authors' => $authors];
}
function selectAllAuthors($arr)
{
  global $link;
  $sql = "SELECT * FROM authors";
  if(!$result = mysqli_query($link, $sql)) return false;
  $authors = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);

  $authorsWithBooks = [];
  foreach($arr['authors'] as $authorName => $books){
    $authorsWithBooks[$authorName] = count($books);
  }
  $allAuthors = [];
  foreach($authors as $author){
    $name = $author['Name'];
    if(array_key_exists($name, $authorsWithBooks)){
      $booksCount = $authorsWithBooks[$name];
      $allAuthors[$name] = $booksCount;
      continue;
    }
    $allAuthors[$name] = 0;
  }

  return $allAuthors;
}
function addAuthor($author)
{
  global $link;
  $sql = "INSERT INTO authors (Name) VALUES ('$author')";
  if(!mysqli_query($link, $sql)) return false;
}
