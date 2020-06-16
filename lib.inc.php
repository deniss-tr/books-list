<?php
const DB_HOST = 'localhost';
const DB_LOGIN = 'root';
const DB_PASSWORD = 'root';
const DB_NAME = 'bookdb';

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

function selectAll()
{
  global $link;
//get BOOKS
  $sql = 'SELECT books.*, authors.name FROM books LEFT JOIN authors ON books.AuthorId = authors.id';
  if(!$result = mysqli_query($link, $sql)) return false;
  $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
//get Authors
  $sql = 'SELECT * FROM authors';
  if(!$result = mysqli_query($link, $sql)) return false;
  $authors = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
//join authors and books
  $arr = [];
  foreach($books as $book){
    $arr[$book['name']][] = $book['Title'];
  }

  $authorsWithBooks = array_map(function($author) use ($arr){
    $author['books'] = $arr[$author['Name']];
    return $author;
  },$authors);

  return ['books' => $books, 'authors' => $authorsWithBooks];
}
function allAuthors()
{
  global $link;
  $sql = 'SELECT * FROM authors';
  if(!$result = mysqli_query($link, $sql)) return false;
  $authors = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  return $authors;
}
function addAuthor($author)
{
  global $link;
  $sql = "INSERT INTO authors (Name) VALUES ('$author')";
  if(!mysqli_query($link, $sql)) return false;
}
function addBook($book, $author)
{

  global $link;
  $sql = "SELECT Id FROM authors WHERE Name = '$author'";
  if(!$result = mysqli_query($link, $sql)) return false;
  $author = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $authorId = (int) $author['Id'];

  $sql = "INSERT INTO books (AuthorId, Title) VALUES ($authorId, '$book')";
  if(!$result = mysqli_query($link, $sql)) return false;
}
function removeAuthor($id)
{
  global $link;
  $sql = "DELETE FROM authors WHERE Id = $id";
  if(!mysqli_query($link, $sql)) return false;
  return true;
}
function removeBook($id)
{
  global $link;
  $sql = "DELETE FROM books WHERE Id = $id";
  if(!mysqli_query($link, $sql)) return false;
}
function clearText($text){
  $text = trim($text);
  $text = strip_tags($text);
  return $text;
}
