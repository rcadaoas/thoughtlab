<?php get_header(); ?>

<div class="page-header">
	<h1>All my nonsense in one page</h1>
</div>
<div class="row" >
	<?php get_sidebar(); ?>
	<div class="col-lg-9">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<p>&nbsp;&nbsp;<span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php the_time('F jS, Y') ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php the_author(); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="glyphicon glyphicon-tag" aria-hidden="true"></span> <?php the_tags(); ?></p>
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>
			<br/>
			<p><?php the_content('Read More..'); ?></p>
			<br/>
			<hr> 
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>