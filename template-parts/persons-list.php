<?php
/**
 * List of all persons
 */
?>
<h2>Persons list</h2>
<ul>
  <?php
  $persons = gsbtb_getPersons() || [];
  if (count($persons) > 0) {
    foreach ( $persons as $person )
      get_template_part( 'persons-list-item', $person );
  }
  else {
    ?>
    No persons.
    <?php
  }
  ?>
</ul>
