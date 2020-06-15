<?php
require "..\lib.inc.php";

if($author = $_POST['author']){
	addAuthor($author);
	header("Location: index.php");
	exit;
}

$all = selectAll();

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Add author</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="..\styles.css" rel="stylesheet">
</head>
<body class="text-center">
	<div class="alert alert-success add-record" role="alert">
		New record has been added!
	</div>
	<div class="alert alert-primary remove-record" role="alert">
		Record has been removed!
	</div>
	<br>
	<a href="/admin/book">Add Book</a>
	<span> / </span>
	<a href="/admin/author">Add Author</a>
	<div class="main">
	<div class="bd-tables">
		<h3>Books</h3>
		<table class="table">
		  <thead class="thead-dark">
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Title</th>
			  <th scope="col">Author</th>
			  <th scope="col">Remove</th>
			</tr>
		  </thead>
		  <tbody>
				<?php
		      include '..\templates\admin-books-list.php';
		    ?>
		  </tbody>
		</table>
		<br>
		<h3>Authors</h3>
		<table class="table">
		  <thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Author</th>
					<th scope="col">Books count</th>
					<th scope="col">Remove</th>
				</tr>
				</thead>
				<tbody>
				<?php
		      include '..\templates\admin-authors-list.php';
		    ?>
		  </tbody>
		</table>
	</div>
	</div>
</body>
</html>
