<?php
require "..\lib.inc.php";

$arr = selectAllBooks();

foreach($arr['books'] as $book){
?>
<div class="media text-muted pt-3">
  <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#28a745"></rect><text x="50%" y="50%" fill="#28a745" dy=".3em">32x32</text></svg>
  <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
    <div class="d-flex justify-content-between align-items-center w-100">
      <strong class="text-gray-dark">Author: <?= $book['name'] ?></strong>
      <strong class="d-block">Book title: <?= $book['Title'] ?></strong>
      <a href="#">Edit</a>
      <a href="#">Remove</a>
    </div>
  </div>
</div>
<? } ?>
