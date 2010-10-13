<?php get_header(); ?>

<div class="grid_16">

    <?php if (have_posts()) : ?>
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
    <h2><?php echo single_cat_title(); ?></h2>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h2>
      <?php the_time('F jS, Y'); ?>
    </h2>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h2>
      <?php the_time('F, Y'); ?>
    </h2>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h2>
      <?php the_time('Y'); ?>
    </h2>
    <?php /* If this is a search */ } elseif (is_search()) { ?>
    <h2>Resultados de la búsqueda</h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h2>Archivo de Autor</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <h2>Archivo del Blog</h2>
      <?php } ?>

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