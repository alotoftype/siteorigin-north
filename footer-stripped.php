<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package siteorigin-north
 */

?>
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer <?php if ( ! siteorigin_setting('footer_constrained') ) echo 'unconstrained-footer' ?>" role="contentinfo">
	
		<div class="site-info">
			<div class="container">
				<?php
				siteorigin_north_footer_text();

				$credit_text = apply_filters(
					'siteorigin_north_footer_credits',
					sprintf( esc_html__( 'Theme by %s.', 'siteorigin-north' ), '<a href="https://siteorigin.com/" rel="designer">SiteOrigin</a>' )
				);

				if ( !empty( $credit_text ) ) {
					?><span class="sep"> | </span><?php
					echo wp_kses_post( $credit_text );
				}
				?>
			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php if ( siteorigin_setting( 'navigation_scroll_to_top' ) ) : ?>
	<div id="scroll-to-top">
		<span class="screen-reader-text"><?php esc_html_e( 'Scroll to top', 'siteorigin-north' ); ?></span>
		<?php siteorigin_north_display_icon( 'up-arrow' ); ?>
	</div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>