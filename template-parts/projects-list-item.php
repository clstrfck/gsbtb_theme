<?php
/**
 * A project as a list item
 */
?>
<li class="project">
  I'm a project<br>
  <img class="avatar" src="<?=$project->avatar ?>">
  <div class="name"><?=$project->name ?></div>
  <div class="bio"><?=$project->description ?></div>
  <?php
  var_dump($project);
  ?>
</li>
