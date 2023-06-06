<?php require "view_begin.php"; ?>


<p> <?= $information['name'] ?>, nobels price of <?= $information['category'] ?> in <?= $information['year'] ?></p>
<p> Born in <?= $information['birthdate'] ?> at <?= $information['birthplace'] ?> in <?= $information['county'] ?></p>
<p><?= $information['motivation'] ?></p>


<?php require "view_end.php"; ?>
