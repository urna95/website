<?php

add_action( 'wp_enqueue_scripts', 'education_business_chld_thm_parent_css' );
function education_business_chld_thm_parent_css() {

    $education_business_theme = wp_get_theme();
    $theme_version = $education_business_theme->get( 'Version' );

    wp_enqueue_style( 
    	'education_business_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	),
        $theme_version
    );
    
}

/**
* Change the theme color
*/
add_filter( 'bizberg_theme_color', 'education_business_change_theme_color' );
function education_business_change_theme_color(){
    return '#ffb606';
}

/**
* Change the header menu color hover
*/
add_filter( 'bizberg_header_menu_color_hover', 'education_business_header_menu_color_hover' );
function education_business_header_menu_color_hover(){
    return '#ffb606';
}

/**
* Change the button color of header
*/
add_filter( 'bizberg_header_button_color', 'education_business_header_button_color' );
function education_business_header_button_color(){
    return '#ffb606';
}

/**
* Change the button hover color of header
*/
add_filter( 'bizberg_header_button_color_hover', 'education_business_header_button_color_hover' );
function education_business_header_button_color_hover(){
    return '#ffb606';
}

/**
* Changed to slider
*/
add_filter( 'bizberg_slider_banner_settings', 'education_business_slider_banner_settings' );
function education_business_slider_banner_settings(){
    return 'slider';
}

add_filter( 'bizberg_slider_title_box_highlight_color', function(){
    return '#ffb606';
});

add_filter( 'bizberg_slider_arrow_background_color', function(){
    return '#ffb606';
});

add_filter( 'bizberg_slider_dot_active_color', function(){
    return '#ffb606';
});

add_filter( 'bizberg_slider_gradient_primary_color', function(){
    return 'rgba(255,182,6,0.65)';
});

add_filter( 'bizberg_read_more_background_color', function(){
    return '#ffb606';
});

/**
* Add necessary plugins for the theme
*/

add_filter( 'bizberg_recommended_plugins', function( $plugins ){

    if( empty( $plugins ) ){
        return $plugins;
    }

    $disable_plugins = array(
        'elegant-blocks',
        'ultimate-addons-for-gutenberg'
    );

    foreach ( $plugins as $key => $value ) {        
        if( in_array( $value['slug'], $disable_plugins ) ){
            unset( $plugins[$key] );
        }
    }

    $new_plugins = array(
        array(
            'name' => esc_html__( 'Elementor Page Builder', 'education-business' ),
            'slug' => 'elementor',
            'required' => false
        ),
        array(
            'name' => esc_html__( 'Essential Addons for Elementor', 'education-business' ),
            'slug' => 'essential-addons-for-elementor-lite',
            'required' => false
        ),
        array(
            'name' => esc_html__( 'Cyclone Demo Importer', 'education-business' ),
            'slug' => 'cyclone-demo-importer',
            'required' => false
        )
    );

    return array_merge( array_values( $plugins ) , $new_plugins );

});