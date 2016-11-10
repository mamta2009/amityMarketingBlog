<?php
/**
 * Template Name: Coming Soon
 **/

get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
		<h1 class="text-center page-title"><?php
		while ( have_posts() ) : the_post();
		the_title();
		endwhile; ?></h1>
		</div> <!-- /.col-sm-4 -->
	</div> <!-- /.row -->
	<div class="text-center coming-soon">
		<p class="text-center page-title coming-soon"><b>Coming <br />Soon!</b></p>
		<img class="img-responsive" src ="<?php echo esc_url( get_template_directory_uri() ); ?>/images/settings.png" />
	</div> <!-- /.two-column-post-list -->
</div> <!-- /.container -->
<?php get_footer(); ?>

