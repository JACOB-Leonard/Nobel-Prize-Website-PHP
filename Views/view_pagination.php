<?php require "view_begin.php"; ?>

<table>
<table><tr> <th> NAME </th> <th> CATEGORY </th> <th> YEAR </th></th>
<?php foreach ($Nobels25 as $value): ?>
  <tr>
  <td><a href="?controller=list&action=informations&id=<?= $value['id'] ?>" > <?= $value['name'] ?></a></td>
  <td> <?= $value['category'] ?> </td>
  <td> <?= $value['year'] ?> </td>
  <td border="0"> <a href="?controller=set&action=form_update&id=<?= $value['id'] ?>">
  <i class="material-icons"><img src="Content/img/edit-icon.png" alt="icone"></a></i>
  <td border="0"> <a href="?controller=set&action=remove&id=<?= $value['id'] ?>"><img src="Content/img/remove-icon.png" alt="icone"></a>
</td>
  </tr>
<?php endforeach ?>
</table>
<?php require "view_end.php"; ?>

<table><tr>Pages:<th></th>
  <tr>
  <td border="0"> <a href="?controller=list&action=pagination&start=<?= $_GET["start"] -1 ?>"><img class="material-icons" src="Content/img/previous-icon.png" alt="icone"></a></td>
  <td><a href="?controller=list&action=pagination&start=<?= 1 ?>" > <?= 1 ?></a></td>
  <td><a href="?controller=list&action=pagination&start=<?= 255 ?>" > <?= 300 ?></a></td>
  <td border="0"> <a href="?controller=list&action=pagination&start=<?= $_GET["start"] + 1 ?>"><img  class="material-icons" src="Content/img/next-icon.png" alt="icone"></a></td>


</tr>
</table>
