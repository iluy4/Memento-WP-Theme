<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>
<?php endif; ?>
	
<?php if(!empty($post->post_password)) : ?>
	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
	<?php endif; ?>
<?php endif; ?>



<?php if($comments) : ?>
	<ul>
  	<?php foreach($comments as $comment) : ?>
		<div class="panel" id="kommentti">
        <li id="comment-<?php comment_ID(); ?>">
			<?php if ($comment->comment_approved == '0') : ?>
				<p>Kommenttisi odottaa</p>
			<?php endif; ?>
			<?php comment_text(); ?>
			<cite> - <?php comment_author_link(); ?> <?php comment_time(); ?> <?php comment_date(); ?> </cite>
            <?php edit_comment_link($link_text, $before_link, $after_link); ?>
		</li>
        </div>
	<?php endforeach; ?>
	</ul>
<?php else : ?>
	<p>Ei kommentteja</p>
<?php endif; ?>


<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>Sinun täytyy olla <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">kirjautuneena sisään</a> kommentoidaksesi.</p>
		<?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if($user_ID) : ?>
            
				<p>Kirjautuneena <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> - <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Kirjaudu ulos"> Kirjaudu ulos</a></p>
                
			<?php else : ?>
            
				<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
				<label for="author"><small>Nimi <?php if($req) echo "(required)"; ?></small></label></p>
                
			<?php endif; ?>
            

			<p><textarea name="comment" id="comment" cols="100%" rows="5" tabindex="4"></textarea></p>
			<p><input name="submit" type="submit" id="submit" tabindex="5" value="Kommentoi" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>

			<?php do_action('comment_form', $post->ID); ?>
		</form>

    
	<?php endif; ?>
<?php else : ?>
	<p>Kommentointi on estetty.</p>
<?php endif; ?>
