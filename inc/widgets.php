<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hemerken_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Sidebar', 'hemerken' ),
		'id'            => 'homepage-sidebar',
		'description'   => esc_html__( 'If empty, homepage sidebar will display the "Sidebar" widgets above.', 'hemerken' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Content', 'hemerken' ),
		'id'            => 'homepage',
		'description'   => esc_html__( 'Only put "Home One/Two/Three Columns" and "Advertisement" widgets here.', 'hemerken' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hemerken' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'hemerken' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'hemerken' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'hemerken' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'hemerken' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'hemerken' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'hemerken' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'hemerken' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'hemerken' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'hemerken' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"></span>',
		'after_title'   => '</span></h3>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Advertisement', 'hemerken' ),
		'id'            => 'header-ad',
		'description'   => esc_html__( 'Drag the "Advertisement" widget here.', 'hemerken' ),
		'before_widget' => '<div id="%1$s" class="header-ad %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Content Advertisement', 'hemerken' ),
		'id'            => 'content-ad',
		'description'   => esc_html__( 'Drag the "Advertisement" widget here. Will display on archives page and single post bottom.', 'newsnow-gt' ),
		'before_widget' => '<div id="%1$s" class="content-ad %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
		) );
}
add_action( 'widgets_init', 'hemerken_widgets_init' );

