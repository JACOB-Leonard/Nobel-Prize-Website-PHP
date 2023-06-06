<?php require "view_begin.php" ?>

<form action = "?controller=set&action=add" method="post">

<?php $i = 0; foreach ($data["key"] as $clé => $x):
  if ( $i != 0 && $i != 2 && $i != 7):?>
  <p> <label> <?= $clé?>: <input type="text" name="<?= $clé?>"/></label> </p>
<?php $i = $i+1;else: $i = $i+1; endif; endforeach ?>

<p>
<?php foreach ($data["categories"] as $key => $value):?>
  <label> <input type="radio" name="Category" value="<?= $value ?>"><?= $value ?></label>
<?php endforeach ?>
</p>
<textarea name="Motivation" cols="70" rows="10"></textarea><p>
<input type="submit" value="Add in database"/> </p>

</form>

<?php require "view_end.php"; ?>
