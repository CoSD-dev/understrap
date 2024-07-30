<?php
/**
 * Sidebar setup for footer full
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'footerfull' ) ) {
	return;
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- ******************* The Footer Full-width Widget Area ******************* -->

<div class="survey-banner">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8">
				
			<h6 class="wp-block-heading survey-banner__heading">Was this page helpful?</h6>
				
			</div>

			<div class="col-12 col-md-4 btn-column">
			
<div class="wp-bootstrap-blocks-button">
	<a href="https://www.surveymonkey.com/r/cosd-feedback?type=Helpful" class="btn block_btn__margin  btn-secondary">
		Yes	</a>
</div>


<div class="wp-bootstrap-blocks-button">
	<a href="https://www.surveymonkey.com/r/cosd-feedback?type=Helpful" class="btn btn-secondary">
		No	</a>
</div>

	</div>
		</div>
	</div>
</div>

<div class="wrapper" id="wrapper-footer-full" role="complementary">

	<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

		<div class="row">

			<?php dynamic_sidebar( 'footerfull' ); ?>

		</div>

	</div>

</div><!-- #wrapper-footer-full -->
