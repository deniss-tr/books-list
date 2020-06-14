<?php

$i = 0;
foreach($arr['books'] as $book){
  $i += 1;
?>
<tr>
  <th scope="row"><?= $i ?></th>
  <td><?= $book['Title'] ?></td>
  <td><?= $book['name'] ?></td>
  <td><a href='#'>remove</a></td>
</tr>
<tr>
<? } ?>
