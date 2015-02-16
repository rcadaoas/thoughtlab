<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="header">
	<h1><?php the_title(); ?> </h1>
	</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
	endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
	
</div> <!-- end of #container -->

<?php get_footer();?>