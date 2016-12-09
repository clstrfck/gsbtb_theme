<?php
/**
 * The home page.
 * For now a place to set the gsbtb theme functionalities
 * Based on a copy of index.php
 *
 * @package gsbtb_theme
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <h1>Home!</h1>
		<?php

    get_template_part('template-parts/persons-list');
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
