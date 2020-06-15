<?php
  require "..\..\lib.inc.php";
  $authors = allAuthors();
  console_log($authors);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add book</title>
    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="..\..\styles.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <div class="main">
		<form class="form-add" action="/admin/" method="POST">
			<h1 class="h3 mb-3 font-weight-normal">Add book</h1>
			<label for="book" class="sr-only">author</label>
			<input type="text" name="book" id="book" class="form-control" placeholder="name" required autofocus>
			<br>
			<div>
				<label for="author-name">Select author</label>
				<select name="author-name" class="custom-select d-block w-100" id="author-name" required>
					<option value="">Choose...</option>
          <?php foreach($authors as $author): ?>
					  <option><?=$author['Name']?></option>
          <?php endforeach; ?>
				</select>
			</div>
			<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Add new</button>
			<p class="mt-5 mb-3 text-muted"><a href='/admin'>back to list</a></p>
		</form>
	</div>
</body>
</html>
