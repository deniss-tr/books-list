<?php
if($author = $_POST['author']){
  $author = clearText($author);
  $text = "<div class='alert alert-success add-record' role='alert'>
  		New Author has been added!
  	</div>";
  $_SESSION['notice'] = $text;
	addAuthor($author);
}
if($book = $_POST['book']){
  $book = clearText($book);
  $text = "<div class='alert alert-success add-record' role='alert'>
      New Book has been added!
    </div>";
  $_SESSION['notice'] = $text;
  $author = $_POST['author-name'];
	addBook($book, $author);

}
if($id = $_GET['rem-a']){

	if(removeAuthor($id)){
    $text = "<div class='alert alert-primary remove-record' role='alert'>
      Author has been removed!
    </div>";
  } else {
    $text = "<div class='alert alert-danger remove-record' role='alert'>
    		You can't delete author!
    	</div>";
  }
  $_SESSION['notice'] = $text;
	// header("Location: /admin/");
	// exit;
}
if($id = $_GET['rem-b']){
  $text = "<div class='alert alert-primary remove-record' role='alert'>
    Book has been removed!
  </div>";
  $_SESSION['notice'] = $text;
	removeBook($id);
	// header("Location: /admin/");
	// exit;
}
