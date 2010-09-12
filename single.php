<?php get_header(); ?>

<div class="grid_16">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<div class="entry single">
<h2><?php the_title(); ?></h2>
<?php the_content();?>
</div><!-- .entry .single -->

<div id="meta">
  <p class="date"><strong><?php _e("Published on"); ?></strong>: <?php the_time('F j, Y') ?> <?php the_time('h:ia')  ?></p>
  <p class="categories"><?php _e("Under the categories"); ?>:
    <?php the_category(','); ?>
  </p>
  <?php if ($post-> comment_status == "open" && $post->ping_status == "open") { ?>

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
</div><!-- #meta -->

<?php edit_post_link('Edit','<p>','</p>'); ?>

<div class="navigation">
<div class="col1">
<p><?php previous_post('&laquo; %','', 'yes'); ?></p>
</div>
<div class="col2" style="text-align:right;">
<p><?php next_post('% &raquo; ','', 'yes'); ?></p>
</div>
</div> <!-- end navigation -->

<?php endwhile; ?>
<?php else : ?>

<h2><?php _e("Not Found"); ?></h2>
<p><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

<?php endif; ?>

<?php comments_template(); ?>

</div><!-- .grid_16 -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>