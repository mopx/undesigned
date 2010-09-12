<div id="sidebar">

<div class="grid_7 prefix_1">

<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : ?><?php endif; ?>



<?php if (is_single()) { ?>
<div class="callout" id="meta">

<p class="date">Publicado el 
<?php the_time('F j, Y') ?> <?php the_time('h:ia')  ?>
</p>
<p class="categories">Bajo las categorias: 
<?php the_category(','); ?>
</p>
<?php if ($post-> comment_status == "open" && $post->ping_status == "open") { ?>


<p class="comments"><a href="#comments_form">Comenta algo</a> o <a href="#commentarios">lee los comentarios</a></p>

<p><a href="<?php trackback_url(display); ?>">Trackback URL</a> <br />
<?php comments_rss_link('RSS Feed URL'); ?>
</p>
<?php } elseif ($post-> comment_status == "open") {?>
<p>
<?php comments_rss_link('RSS Feed URL'); ?>
</p>
<?php } elseif ($post->ping_status == "open") {?>
<p><a href="<?php trackback_url(display); ?>">Trackback this post</a></p>
<?php } ?>
</div>
<!-- callout -->

<?php } ?>



</div><!-- .grid_7 -->

</div><!-- #sidebar -->