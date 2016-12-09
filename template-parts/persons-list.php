<?php
/**
 * List of all persons
 */
?>
<h2>Persons list</h2>
<ul>
  <?php
  $persons = [];
  //$persons = gsbtb_getPersons();
  if (count($persons) > 0) {
    foreach ( $persons as $person )
      set_query_var( 'person', $person );
      get_template_part( 'persons-list-item' );
  }
  else {
    ?>
    No people yet.
    <?php
  }
  ?>
</ul>
