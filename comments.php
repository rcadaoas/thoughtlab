<div id="comments">

<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('You can not access this page directly!'); ?>  
<?php endif; ?>

<?php if(!empty($post->post_password)) : ?>
  	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
		<p>This post is password protected. Enter the password to view comments.</p>
  	<?php endif; ?>
<?php endif; ?>

<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="form-horizontal">
			<?php if($user_ID) : ?>
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
			<?php else : ?>
			<div class="form-group">
				<div class="col-lg-3">
					<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" placeholder="John Doe" class="form-control"/>
				</div>
				<div class="col-lg-5">
					<label for="author"><small><span class="text-primary">Name</span> <?php if($req) echo "(required)"; ?></small></label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-3">
					<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" placeholder="johndoe@mail.com" class="form-control"/>
				</div>
				<div class="col-lg-5">
					<label for="email"><small><span class="text-primary">Email</span> (we will not share your email) <?php if($req) echo "(required)"; ?></small></label>
				</div>
			</div>
			<?php endif; ?>
			<div class="form-group">
				<div class="col-lg-12">
					<textarea name="comment" id="comment" cols="100%" rows="3" tabindex="4" class="form-control" placeholder="Join the discussion.."></textarea>
				</div>
			</div>
			<div class="form-group">
      			<div class="col-lg-12">
					<input name="submit" type="submit" id="submit" tabindex="5" value="Submit" class="btn btn-primary" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
					<?php do_action('comment_form', $post->ID); ?>
				</div>
		    </div>
			
		</form>
	<?php endif; ?>
<?php else : ?>
	<p>The comments are closed.</p>
<?php endif; ?>
<div class="page-header">
<h3><strong><?php comments_number('No comments', 'One comment', '% comments'); ?></strong></h3>
</div>
<?php if($comments) : ?>
  	<ul  class="list-group">
    	<?php foreach($comments as $comment) : ?>
  		<li id="comment-<?php comment_ID(); ?>" class="list-group-item">
  			<div class="row">
	  			<div class="col-lg-2">
	  				<?php echo get_avatar(get_comment_author_email(), $size, $default_avatar ); ?>
				</div>
	  			<div class="col-lg-9">
	  				<?php if ($comment->comment_approved == '0') : ?>
	  					<p class="text-warning">Your comment is pending for approval.</p>
		  			<?php endif; ?>
		  			<?php comment_text(); ?>
	  				<p class="meta"><?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date(); ?> at <?php comment_time(); ?></p>
	  			</div>
  			</div>
  			<div id="delimiter"></div>
  		</li>
		<?php endforeach; ?>
	</ol>
<?php else : ?>
	<p>No comments yet</p>
<?php endif; ?>


</div>