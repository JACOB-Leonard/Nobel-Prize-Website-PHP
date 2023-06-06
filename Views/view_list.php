<?php require "view_begin.php"; ?>

<table>
<table><tr> <th> NAME </th> <th> CATEGORY </th> <th> YEAR </th></th>
<?php foreach ($last25 as $value): ?>
  <tr>
  <td><a href="?controller=list&action=informations&id=<?= $value['id'] ?>" > <?= $value['name'] ?></a></td>
  <td> <?= $value['category'] ?> </td>
  <td> <?= $value['year'] ?> </td>
  <td border="0"> <a href="?controller=set&action=form_update&id=<?= $value['id'] ?>"><img src="Content/img/edit-icon.png" alt="icone"></a>
  <td border="0"> <a href="?controller=set&action=remove&id=<?= $value['id'] ?>"><img src="Content/img/remove-icon.png" alt="icone"></a>
</td>
  </tr>
<?php endforeach ?>
</table>
<?php require "view_end.php"; ?>
