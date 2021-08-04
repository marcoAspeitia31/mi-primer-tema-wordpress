<?php
/**
 * Displays the site navigation.
 *
 * @package devitm-theme
 * 
 * @since DevITM 1.0.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'devitm-theme' ); ?>">
		<div class="menu-button-container">
			<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
			</button><!-- #primary-mobile-menu -->
		</div><!-- .menu-button-container -->
		<?php
        /**
         * Displays a navigation menu.
         * 
         * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
         */
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu-wrapper',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>
