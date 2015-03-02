<div id="sidebar" class="col-lg-3">
	<h2><?php _e('Categories'); ?></h2>
	<ul>
	<?php wp_list_cats('sort_column=name&optioncount=1&heirarchical=0');?>
	</ul>

	<h2><?php _e('Archives');?></h2>
	<ul>
	<?php wp_get_archives('type=monthly');?>
	</ul>
</div>