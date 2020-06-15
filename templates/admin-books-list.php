<?php

$i = 0;
foreach($all['books'] as $book){
  $i += 1;
?>
<tr>
  <th scope="row"><?= $i ?></th>
  <td><?= $book['Title'] ?></td>
  <td><?= $book['name'] ?></td>
  <td><a href='/admin/?rem-b=<?=$book['Id']?>'>remove</a></td>
</tr>
<tr>
<? } ?>
