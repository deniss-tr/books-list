<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>admin panel</title>
  </head>
  <body>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
    <a href='/'><strong class="d-inline">Index list</strong></a>
    <div class="float-right">
      <a href='#'><strong class="d-inline">Add Author</strong></a>
      <span> | </span>
      <a href='#'><strong class="d-inline">Add Book</strong></a>
    </div>
    <h6 class="border-bottom border-gray pb-2 mb-0">Books</h6>

    <?php
      include '..\templates\admin-list.php';
    ?>

    <!-- <small class="d-block text-right mt-3">
      <a href="#">All suggestions</a>
    </small> -->
  </div>
  </body>
</html>
