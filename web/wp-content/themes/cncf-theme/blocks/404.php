<?php
/**
 * 404 page
 *
 * Shown when a page is not found.
 *
 * @package WordPress
 * @subpackage cncf-theme
 * @since 1.0.0
 */

?>

<section class="404">
	<div class="container wrap entry-content">
		<h3>Sorry, this page cannot be found.</h3>
		<p>We couldn't find what you are looking for, please try searching.</p>
		<div class="search-form-outer">
			<form role="search" method="get" class="search-form"
				action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<label>
					<span
						class="screen-reader-text"><?php esc_attr_e( 'Search for:', 'label' ); ?></span>
					<input type="search" class="search-field"
						placeholder="<?php echo esc_attr_e( 'Search...', 'placeholder' ); ?>"
						value="<?php echo get_search_query(); ?>" name="s"
						title="<?php echo esc_attr_e( 'Search for:', 'label' ); ?>" />
				</label>
				<input type="submit" class="button"
					value="<?php esc_attr_e( 'Search', 'submit button' ); ?>" />
			</form>
		</div>
	</div>
</section>