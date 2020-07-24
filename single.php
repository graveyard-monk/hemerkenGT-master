<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HemerkenGT
 */

get_header();

if ( function_exists( 'hemerken_gt_set_post_views' ) ) :
	hemerken_gt_set_post_views(get_the_ID());
endif;
?>

<div id="primary" class="content-area col-md-8">

<div class="breadcrumbs">
			<span class="breadcrumbs-nav">
				<span class="here"><?php esc_html_e('You are here:', 'hemerken'); ?></span>
				<span class="divider"></span>
				<a href="<?php echo home_url(); ?>"><?php esc_html_e('Home', 'hemerken-gt'); ?></a>
				<span class="divider"></span>
				<span class="post-category"><?php hemerken_first_category(); ?></span>
			</span>
		</div>

	<main id="main" class="site-main">

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="dmbs-post-featured-image">
              <?php the_post_thumbnail('featured', array('class' => 'card-img-top')); ?>
        </div>
    <?php endif; ?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'hemerken' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'hemerken' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	</div><!-- #primary -->

<div class="col-md-4">
	<?php get_sidebar(); ?>
</div>
<?php get_footer();

