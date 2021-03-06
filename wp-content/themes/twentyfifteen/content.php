<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
		endif;
	?>
	
	
	<div class="entry-content">
		<div class="blog-feature-img">
			<?php
				// Post thumbnail.
				the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']);
			?>
		</div>
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			// wp_link_pages( array(
			// 	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
			// 	'after'       => '</div>',
			// 	'link_before' => '<span>',
			// 	'link_after'  => '</span>',
			// 	'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
			// 	'separator'   => '<span class="screen-reader-text">, </span>',
			// ) );
		?>
	</div><!-- .entry-content -->

	<?php
		// Author bio.
		// if ( is_single() && get_the_author_meta( 'description' ) ) :
		// 	get_template_part( 'author-bio' );
		// endif;
	?>

	<footer class="entry-footer">
		<span class="posted-date">On <?php echo get_the_date(); ?></span>
		<span class="author"> <i>,By <?php echo get_the_author(); ?> </i></span>
		
		<?php //twentyfifteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
