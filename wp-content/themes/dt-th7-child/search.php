<?php
/**
 * Search results page.
 *
 * @since   1.0.0
 *
 * @package The7\Templates
 */

defined( 'ABSPATH' ) || exit;

$config = presscore_config();
$config->set( 'template', 'search' );
// $config->set( 'layout', 'masonry' );
// $config->set( 'template.layout.type', 'masonry' );

get_header('membership');
?>

<script type="text/javascript">
	jQuery(document).ready(function () {
		jQuery("body.search .grid_wrapper .wf-container").prepend("<h3 style='color: #3f4252;font-size: 2rem;font-family: serif;margin-bottom: 25px;'>Search Results: </h3>");
	});
</script>
	<!-- Content -->
	<!-- <div id="content" class="content" role="main"> -->

		<?php
		if ( have_posts() ) {

			the7_search_loop();
		} else {
			get_template_part( 'no-results', 'search' );
		}
		?>

	</div><!-- #content -->

<?php do_action( 'presscore_after_content' ); ?>

<!-- <?php //get_footer(); ?> -->
