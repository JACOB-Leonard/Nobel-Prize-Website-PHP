<?php require "view_begin.php" ?>

<form action = "?controller=set&action=update" method="post">

<?php $i = 0; foreach ($data["key"] as $clé => $x):
  if ( $i != 2 && $i != 7):?>
  <p> <label> <?= $clé?>: <input type="text" name="<?= $clé?>" placeholder="<?= $x ?>"/></label> </p>
<?php $i = $i+1;else: $i = $i+1; endif; endforeach ?>

<p>
<?php foreach ($data["categories"] as $key => $value):
  if ($data["key"]["category"] == $value):?>
    <label> <input type="radio" name="Category" checked value="<?= $value ?>"><?= $value ?></label>
  <?php else: ?>
  <label> <input type="radio" name="Category" value="<?= $value ?>"><?= $value ?></label>
<?php endif; endforeach ?>
</p>
<textarea name="Motivation" cols="70" rows="10" placeholder="<?= $data["key"]["motivation"]?>"></textarea><p>
<input type="submit" value="Up in database"/> </p>

</form>

<?php require "view_end.php"; ?>
