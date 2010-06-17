<?php get_header(); ?>
<div class="grid_24">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php edit_post_link('Editar','<p>','</p>'); ?>
<?php endwhile; ?>
<?php endif; ?>
</div><!-- .grid_24 -->
<?php get_footer(); ?>