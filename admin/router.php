<?php
if($author = $_POST['author']){
	addAuthor($author);
	header("Location: /admin/");
	exit;
}
if($book = $_POST['book']){
  $author = $_POST['author-name'];
	addBook($book, $author);
	header("Location: /admin/");
	exit;
}
if($id = $_GET['rem-a']){
	removeAuthor($id);
	header("Location: /admin/");
	exit;
}
if($id = $_GET['rem-b']){
	removeBook($id);
	header("Location: /admin/");
	exit;
}
