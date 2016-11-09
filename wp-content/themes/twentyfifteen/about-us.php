<?php
/**
 *Template Name: About
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
	<div class="about-content">
		<div class="about-first">
			<?php 
				$content = get_the_content();
				print $content;
			?>
		</div>
		<div class="about-second">
			<h1 class="text-center"> Meet Our Team </h1>
			<div class="about-team col-sm-3 text-center">
				<div class="team-image text-center">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/founder.jpg" class="img-circle" /> 
				</div>
				<div class="team-designation text-center"><p>Founder</p></div>
				<div class = "team-name"><p>Dennis Dicker</p></div>
			</div>
			<div class="about-team col-sm-3 text-center">
				<div class="team-image text-center">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/advisor3.png" class="img-circle" /> 
				</div>
				<div class="team-designation text-center"><p>Advisor</p></div>
				<div class = "team-name"><p>Samantha Lyoons Esq.</p></div>
			</div>
			<div class="about-team col-sm-3 text-center">
				<div class="team-image text-center">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/advisor2.jpg" class="img-circle" /> 
				</div>
				<div class="team-designation text-center"><p>Advisor</p></div>
				<div class = "team-name"><p>Dr. Linda Touche-Manley</p></div>
			</div>
			<div class="about-team col-sm-3 text-center">
				<div class="team-image text-center">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/advisor1.jpg" class="img-circle" /> 
				</div>
				<div class="team-designation text-center"><p>Advisor</p></div>
				<div class = "team-name"><p>Dr. Nishikant Sonwalker</p></div>
			</div>
		</div>
	</div>
</div> <!-- /.container -->
<?php get_footer(); ?>

