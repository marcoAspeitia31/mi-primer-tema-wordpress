<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package devitm-theme
 * @since DevITM 1.0.0
 */

?>
	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

    <footer>
        <?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'devitm-theme' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
    </footer>

<?php wp_footer(); ?>

</body>
</html>