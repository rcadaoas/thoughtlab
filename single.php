<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<h5><?php the_category('&nbsp;&rsaquo;&nbsp;'); echo "&nbsp;&rsaquo;&nbsp;"; the_title(); ?></h5>
<div class="col-lg-9">
	<div class="page-header">
		<h1><?php the_title(); ?></h1>
		<p>&nbsp;&nbsp;<span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php the_time('F jS, Y') ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php the_author(); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span class="glyphicon glyphicon-tag" aria-hidden="true"></span> <?php the_tags(); ?></p>

		<?php if ( is_active_sidebar( 'header_1' ) ) : ?>
		<?php dynamic_sidebar( 'header_1' ); ?>
		<?php endif; ?>	
	</div>
</div>
<div class="row" >
	<div class="col-lg-9">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} ?>
		<br/>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<div class="row" >
	<div class="col-lg-9">
		<?php comments_template('', true); ?>
	</div>
</div>
<div id="delimiter"></div>

<?php get_footer(); ?>