<?php get_header(); ?>

<div class="grid_16">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="entry">
<h2><a href="<?php the_permalink() ?>" title="Permalink"><?php the_title(); ?></a></h2>
<?php ($post->post_excerpt != "")? the_excerpt() : the_content(); ?>
<?php if ($post->post_excerpt != "") { ?>
<p><a href="<?php the_permalink() ?>" class="more"><?= _e("Continue reading..."); ?></a></p>
<?php } ?>
<p class="meta"><?php the_time('F j, Y') ?> <?php the_time('h:ia')  ?> | <?php comments_popup_link(__('Comment'), __( '1 comment'), __( '% comments'), 'commentlink', ''); ?></p>
<?php edit_post_link(__('Edit'),'<p>','</p>'); ?>
<!-- <?php trackback_rdf(); ?> -->
</div><!-- .entry -->
<?php endwhile; ?>

<div class="navigation">
<?php next_posts_link(__('&laquo; Older posts')) ?> <?php previous_posts_link(__('Recent posts &raquo;')) ?>
</div><!-- #navigation -->

<?php else : ?>
<h2><?= _e("Not found"); ?></h2>
<p><?= _e("We couldn't find what you are looking for. Try the archives"); ?></p>
<?php endif; ?>

</div><!-- .grid_16 -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>