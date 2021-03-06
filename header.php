<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HemerkenGT
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hemerken' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="site-branding navbar-brand">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;

			$hemerken_gt_description = get_bloginfo( 'description', 'display' );
			if ( $hemerken_gt_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $hemerken_gt_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	<nav id="menu" class="navbar navbar-expand-lg navbar-dark bg-dark navbar-nav col-12" role="navigation">

		<button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse"
	data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<?php
	wp_nav_menu([
		'menu'				=>'primary',
		'theme_location'		=>'primary',
		'container'				=>'div',
		'container_id'			=>'bs4navbar',
		'container_class'		=>'collapse navbar-collapse',
		'menu_id'				=>'main-menu',
		'menu_class'			=>'navbar-nav',
		'depth'					=> 2,
		'fallback_cb'			=>'bs4navwalker::fallback',
		'walker'				=> new bs4navwalker()
	]);
	?>
	</nav>
</header><!-- #masthead -->

<?php
		if(is_home()) {
			get_template_part('template-parts/content','featured');
		}
	?>

<div id="content" class="site-content row">