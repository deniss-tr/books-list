<?php
const DB_HOST = 'localhost';
const DB_LOGIN = 'root';
const DB_PASSWORD = 'root';
const DB_NAME = 'bookdb';

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

function selectAllBooks()
{
  global $link;
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

// function authorBookList()
// {
//   $books = selectAllBooks();
//   $result = [];
//   foreach($books as $book){
//     $result[$book['name']][] = $book['Title'];
//   }
//   return $result;
// }
