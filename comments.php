<div id="comments">

<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');

if (!empty($post->post_password)) { // if there's a password
if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments"); ?>.</p>

<?php
return;
}
}
$commentalt = '';
$commentcount = 1;
?>
<?php if ($comments) : ?>

<h3><?php comments_number('No comments so far', '1 comment', '% comments' ); ?></h3>

<ul>
<?php foreach ($comments as $comment) : ?>
<a name="comment-<?php comment_ID() ?>"></a>

<li id="comment-<?php echo $commentcount ?>" class="<?php comment_type('comment','trackback','pingback'); ?>">

<div class="gravatar_content">
<?php if (function_exists("gravatar")) { ?>
<img src="<?php gravatar("R", 60, get_bloginfo('template_directory') . "/images/gravatar_default.png"); ?>" alt="" class="gravatar" />
<?php } ?>
</div><!-- .gravatar_content -->

<div class="comment_text">

<p class="header<?php echo $commentalt; ?>">
<strong><?php if ($comment->comment_type == "comment") comment_author_link();
else {
strlen($comment->comment_author)?$author=substr($comment->comment_author,0,25)."&hellip":$author=substr($comment->comment_author,0,25);
echo '<a href="'.$comment->comment_author_url.'">'.$author.'</a>';

}
?></strong>
</p>

<p class="date"><?php the_time('F j, Y') ?> <?php the_time('h:ia')  ?></p>


<?php if ($comment->comment_approved == '0') : ?>
<p><em><?php _e("Your comment is being moderated"); ?>.</em></p>
<?php endif; ?>
<?php comment_text() ?>
<?php edit_comment_link('Edit Comment','<p>','</p>'); ?>

</div><!-- .comment_text -->

<div class="clear"></div>

</li>


<?php
($commentalt == " alt")?$commentalt="":$commentalt=" alt";
$commentcount++;
?>

<?php endforeach; /* end for each comment */ ?>
</ul>
<?php endif; ?>
<?php if ($post->comment_status == "open") : ?>

<div id="comments_form">
<h2><?php _e("Leave a comment"); ?></h2>
<?php if (get_option('comment_registration') && !$user_ID) : ?>
<p><?php _e("You must be"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _e("logged in"); ?></a> <?php _e("to post a comment"); ?>.</p>
<?php else : ?>


<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="generic_form">
<?php if ($user_ID) : ?>
<p class="info"><?php _e("Logged in as"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>"><?php _e("Logout"); ?></a>.</p>
<?php else : ?>
<p class="fields">
<label for="author"><?php _e("Your name"); ?></label>
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" class="field" />
<em><?php if ($req) echo "Requerido"; ?></em>
</p>
<p class="fields">
<label for="email"><?php _e("Your e-mail"); ?></label>
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" class="field" />
<em><?php if ($req) echo "Requerido"; ?></em>
</p>
<p class="fields">
<label for="url"><?php _e("URL"); ?></label>
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" class="field" />
</p>
<?php endif; ?>
<p class="fields">
<label for="comment"><?php _e("Comment"); ?></label>
<textarea name="comment" id="comment" cols="45" rows="10" tabindex="4" class="field"></textarea>
</p>
<div class="clear"></div>
<p class="submit_fields">
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<input type="submit" name="submit" value="<?php _e("Send"); ?>" class="button" tabindex="5" />
</p>
<?php do_action('comment_form', $post->ID); ?>
</form>

</div><!-- #comments_form -->

<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
</div><!-- #comments -->