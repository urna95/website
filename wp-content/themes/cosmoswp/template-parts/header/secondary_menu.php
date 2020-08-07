<?php
$menu_align             = cosmoswp_get_theme_options( 'secondary-menu-align' );
$submenu_display_option = cosmoswp_get_theme_options( 'secondary-menu-submenu-display-options' );
$secondary_menu         = cosmoswp_get_theme_options( 'secondary-menu-custom-menu' );
$disable_sub_menu       = cosmoswp_get_theme_options( 'secondary-menu-disable-sub-menu' );
$disable_sub_menu       = ( $disable_sub_menu ) ? 1 : 0;
if ( $secondary_menu ) {
	?>
	<!-- Start of .navigation -->
	<div class="cwp-secondary-menu-wrapper navigation <?php echo esc_attr( $menu_align . ' ' . $submenu_display_option ); ?>">
		<?php
		$nav_menu_args = array(
            'theme_location' => 'header-secondary-menu',
			'menu_class' => 'cwp-secondary-menu',
			'depth'      => $disable_sub_menu,
			'container'  => '',
		);
		wp_nav_menu( apply_filters( 'cwp_secondary_nav_menu_args', $nav_menu_args ) );
		?>
	</div>
	<!-- End of .navigation -->
	<?php
}
