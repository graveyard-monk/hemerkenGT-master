<div class="section-heading">

<?php
	if ( $cat_id == 0 ) {
		echo '<h3 class="section-title">' . __( 'Latest Posts', 'hemerken-gt' ) . '</h3>';
	} else {
		echo '<h3 class="section-title"><a href="' . esc_url( $cat_link ) . '">' . esc_attr( $category->name ) . '</a></h3>';
		echo '<span class="section-more-link"><a href="' . esc_url( $cat_link ) . '">more</a></span>';
	}
?>

</div><!-- .section-heading -->				

<?php
	// The Loop
	while ( $posts->have_posts() ) : $posts->the_post();

	if ($i == 1) {
?>	

<div class="post-big hentry">

	<?php if ( has_post_thumbnail() ) { ?>
		<a class="thumbnail-link" href="<?php the_permalink(); ?>">
			<div class="thumbnail-wrap">
				<?php 
					the_post_thumbnail('block_large_thumb');  
				?>
			</div><!-- .thumbnail-wrap -->
		</a>
	<?php } ?>

	<div class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry-meta">
			<span class="entry-date"><?php echo get_the_date(); ?></span>
			<span class="entry-comment"><?php comments_popup_link( 'add comment', '1 comment', '% comments', 'comments-link', 'comments off'); ?></span>
		</div><!-- .entry-meta -->							
	</div><!-- .entry-header -->

	<div class="entry-summary">
		<?php echo hemerken_gt_custom_excerpt( get_theme_mod('homepage-excerpt-length','18') ); ?>
	</div><!-- .entry-summary -->			

</div><!-- .hentry -->

<?php } else { ?>

	<div class="post-small hentry clear <?php echo( $posts->current_post + 1 === $posts->post_count ) ? 'last' : ''; ?>">

		<div class="entry-header">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</div><!-- .entry-header -->

	</div><!-- .hentry -->

<?php

	} 

	$i++;
	endwhile;
?>