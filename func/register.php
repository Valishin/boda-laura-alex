<?php

// register_nav_menu('main-menu', __('Main menu'));


/**
 * *****************************************************************************
 * Register menus
 * *****************************************************************************
 */
if (! function_exists ( 'av_custom_navigation_menus' )) :
	function av_custom_navigation_menus() {
		$locations = array(
				'header_menu' 		=> __( 'Header Menu', 'avali' ),                
				'footer_menu_1'     => __( 'Footer Menu 1', 'avali' ), 
				'footer_menu_2'     => __( 'Footer Menu 2', 'avali' ), 
				'footer_menu_3'     => __( 'Footer Menu 3', 'avali' ), 
				'footer_menu_legal_info'     => __( 'Footer Menu Legal Info', 'avali' ),              
		);
		register_nav_menus( $locations );
	}
	add_action ( 'init', 'av_custom_navigation_menus' );
endif;

/**
 * *****************************************************************************
 * Register sidebars
 * *****************************************************************************
 */
if (! function_exists ( 'av_custom_sidebars' )) {
	function av_custom_sidebars() {
		register_sidebar( array(
	        'name' => __( 'Blog Sidebar', 'avali' ),
	        'id' => 'av-sidebar-custom',
	        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'avali' ),
	        'before_widget' => '<div id="%1$s" class="sidebar-block %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="sidebar-title">',
			'after_title'   => '</h3>',
	    ) );
	}
	add_action ( 'widgets_init', 'av_custom_sidebars' );
}

/*-----------------------------------------------------------------------------------*/
/* Enable this block to register a CPT
/*-----------------------------------------------------------------------------------*/

add_action('init', 'register_custom_post_types');
function register_custom_post_types() {


}

function get_custom_post_type_labels($singular, $plural){
    $labels = array (
        'name'                  => $plural,
        'singular_name'         => $singular,
        'menu_name'             => $plural,
        'add_new'               => sprintf( __('Añadir %s', 'avali'), $singular ),
        'add_new_item'          => sprintf( __('Añadir nuevo %s', 'avali'), $singular ),
        'edit'                  => __('Editar', 'avali'),
        'edit_item'             => sprintf( __('Editar %s', 'avali'), $singular ),
        'new_item'              => sprintf( __('Nuevo %s', 'avali'), $singular ),
        'view'                  => sprintf( __('Ver %s', 'avali'), $singular ),
        'view_item'             => sprintf( __('Ver %s', 'avali'), $singular ),
        'search_items'          => sprintf( __('Buscar %s', 'avali'), $plural ),
        'not_found'             => sprintf( __('%s no encontrado', 'avali'), $plural ),
        'not_found_in_trash'    => sprintf( __('%s no encontrado en la papelera', 'avali'), $plural ),
        'parent'                => sprintf( __('Parent %s', 'avali'), $singular ),
    );
    return $labels;
}

function get_custom_taxonomy_labels($singular, $plural){
  
}
