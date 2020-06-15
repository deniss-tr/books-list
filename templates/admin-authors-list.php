<?php
$i = 0;
foreach($all['authors'] as $a){
  $i += 1;
?>
<tr>
  <th scope="row"><?= $i ?></th>
  <td><?= $a['Name'] ?></td>
  <td><?= count($a['books']) ?></td>
  <td><a href='/admin/?rem-a=<?=$a['Id']?>'>remove</a></td>
</tr>
<tr>
<? } ?>
