<?php get_header(); ?>
<div class="container">
	<div class="page-header">
		<h1>All my nonsense in one page</h1>
	</div>
	<div class="row" >
		<?php get_sidebar(); ?>
		<div class="col-lg-9">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<h4>Posted on <?php the_time('F jS, Y') ?></h4>
				<p><?php the_content('Read More..'); ?></p>
				<hr> 
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>

</div>
<div id="delimiter"></div>
<?php get_footer(); ?>