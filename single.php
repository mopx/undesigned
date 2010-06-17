<?php get_header(); ?>


<div class="grid_16">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php /* This is the navigation for previous/next post. It's disabled by default. ?>
<p id="entrynavigation">
<?php previous_post('<span class="previous">%</span>','','yes') ?>
<?php next_post('<span class="next">%</span>','','yes') ?>
</p>
<?php */ ?>

<div class="entry single">
<h2><?php the_title(); ?></h2>
<?php the_content();?>
<?php edit_post_link('Editar','<p>','</p>'); ?>
</div><!-- .entry .single -->

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

<h2>Not Found</h2>
<p>"Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>
<?php comments_template(); ?>

</div><!-- .grid_16 -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>