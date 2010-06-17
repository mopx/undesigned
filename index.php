<?php get_header(); ?>

<div class="grid_16">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
<?php $custom_fields = get_post_custom(); //custom fields ?>
<?php if (isset($custom_fields["BX_post_type"]) && $custom_fields["BX_post_type"][0] == "mini") { ?>
<div class="minientry">
<?php } else { ?>
<?php ; ?>

<div class="entry">
<h2><a href="<?php the_permalink() ?>" title="Permalink"><?php the_title(); ?></a></h2>
<?php ($post->post_excerpt != "")? the_excerpt() : the_content(); ?>
<?php if ($post->post_excerpt != "") { ?>
<p><a href="<?php the_permalink() ?>" class="more">Continúa leyendo...</a></p>
<?php } ?>
<p class="meta"><?php the_time('F j, Y') ?> <?php the_time('h:ia')  ?> | <?php comments_popup_link('Comentar', '1 comentario', '% comentarios', 'commentlink', ''); ?></p>
<?php edit_post_link('Editar','<p>','</p>'); ?>
</div><!-- .entry -->
<!-- <?php trackback_rdf(); ?> -->
<?php } ?>
<?php endwhile; ?>

<div class="navigation">
<?php next_posts_link('&laquo; Posts mas viejos') ?> <?php previous_posts_link('Posts mas recientes &raquo;') ?>
</div><!-- #navigation -->

<?php else : ?>
<h2>Página no encontrada</h2>
<p>Lo lamento, lo que buscas, no está aquí.</p>
<?php endif; ?>

</div><!-- .grid_16 -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>