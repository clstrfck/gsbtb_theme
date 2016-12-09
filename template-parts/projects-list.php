<?php
/**
 * List of all projects
 */
?>
<h2>Persons list</h2>
<ul>
  <?php
  $projects = [];
  //$projects = gsbtb_getProjects();
  if (count($projects) > 0) {
    foreach ( $projects as $project )
      set_query_var( 'project', $project );
      get_template_part( 'persons-list-item' );
  }
  else {
    ?>
    No projects yet.
    <?php
  }
  ?>
</ul>
