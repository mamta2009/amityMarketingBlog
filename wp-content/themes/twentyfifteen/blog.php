<?php
/**
 * Template Name: Blog Page
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
	<div class="text-center">
		<div class="row">
			<?php $args = array( 'posts_per_page' => -1, 
			'post_type' => 'post' );
			$postslist = new WP_Query( $args );
			$count = 1;
			
			while ( $postslist->have_posts() ) : $postslist->the_post();

 if ($count%3 == 1)
    {  
         echo "<div class='blogcount'>";
    }			
			
			$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
			if($imgsrc[0] == null || $imgsrc[0] == '')
				$image = '';
			else
				$image = $imgsrc[0];
				
				$tags=get_the_tags();
			?>
			<div class="col-sm-4">
				<div class="blog-thumb">
					<a href="<?php the_permalink();?>"><div class="img-cover-blog" style="border-radius:9px 9px 0 0;background-image: url(<?php echo $image;?>)"></div></a>
					<div class="tags"><?php
					foreach($tags as $tag)
							{
									echo $tag->name . ' ';
							}?>
							</div>
					<div class="blog-thumb-info">
						<h4><a href="<?php the_permalink();?>"><?php ucfirst(the_title());?></a></h4>
					</div> <!-- /.blog-thumb-info -->						
				</div><!-- /.blog-thum -->
			</div> <!-- /.col-sm-6 -->	
			
			<?php
			
			 if ($count%3 == 0)
    {
        echo "</div>";
    }
	$count++;


			endwhile;

if ($count%3 != 1) echo "</div>";
			?>
			
		</div> <!-- /.row -->
	</div> <!-- /.two-column-post-list -->
</div> <!-- /.container -->
<?php get_footer(); ?>

