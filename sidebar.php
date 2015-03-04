<div id="sidebar" class="col-lg-3">
<div class="row">
	<h2><?php _e('Categories'); ?></h2>
	<ul>
	<?php wp_list_cats('sort_column=name&optioncount=1&heirarchical=0');?>
	</ul>

	<h2><?php _e('Archives');?></h2>
	<ul>
	<?php wp_get_archives('type=monthly');?>
	</ul>
</div>
<div class="row">
<?php if ( is_active_sidebar( 'right_1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'right_1' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>	

</div>
</div>

