<?php /* Template Name: archives */ ?>
<?php get_header(); ?>

<div class="grid_16">
<h2>Archivo</h2>
<?php wp_get_archives( $args ); ?>
</div><!-- .grid_16 -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>