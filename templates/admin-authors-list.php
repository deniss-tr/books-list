<?php
$a = 0;
foreach($authorsArr as $name => $count){
  $a += 1;
?>
<tr>
  <th scope="row"><?= $a ?></th>
  <td><?= $name ?></td>
  <td><?= $count ?></td>
  <td><a href='#'>remove</a></td>
</tr>
<tr>
<? } ?>
