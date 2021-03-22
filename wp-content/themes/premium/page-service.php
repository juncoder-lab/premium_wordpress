<?php
/*
Template Name: Service
*/
?>
<?php get_header(); ?>
<h1 class="heading_1 text-center"><?php echo esc_html( get_the_title() ); ?></h1>
<div class="container">
	<div class="row">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
		}
		?>
	</div>
</div>
<?php get_footer(); ?>
