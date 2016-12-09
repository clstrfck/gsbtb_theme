<?php
/**
 * A person as a list item
 */
?>
<li class="person">
  I'm a person<br>
  <img class="avatar" src="<?=$person->avatar ?>">
  <div class="name"><?=$person->name ?></div>
  <div class="bio"><?=$person->bio ?></div>
  <div class="skills"><?=$person->skills ?></div>
  <?php
  var_dump($person);
  ?>
</li>
