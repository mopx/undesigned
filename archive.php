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
    <?php $custom_fields = get_post_custom(); ?>
    <?php if (isset($custom_fields["BX_post_type"]) && $custom_fields["BX_post_type"][0] == "mini") { ?>
    <hr class="low" />
    <div class="minientry">
      <p> <?php echo BX_remove_p($post->post_content); ?>
        <?php comments_popup_link('(0)', '(1)', '(%)', 'commentlink', ''); ?>
        <a href="<?php the_permalink(); ?>" class="permalink" title="Permalink">
        <?php the_time('M j, \'y') ?>
        </a>
        <?php edit_post_link('Edit','<span class="editlink">','</span>'); ?>
      </p>
    </div>
    <hr class="low" />
    <?php } else { ?>
    <div class="entry archivos">
      <h3><a href="<?php the_permalink() ?>" title="Permalink">
        <?php the_title(); ?>
        </a></h3>
      <?php the_excerpt();?>
      <p><a href="<?php the_permalink() ?>">Ver post completo</a></p>
      <?php edit_post_link('Editar','<p>','</p>'); ?>
      <div class="meta">
        <?php the_time('F j, Y') ?>
        <?php the_time('h:ia')  ?>
        |
        <?php comments_popup_link('Comentar', '1 comentario', '% comentarios', 'commentlink', ''); ?>
      </div>
      <!-- meta -->
      </p>
    </div>
    <?php } ?>
    <?php endwhile; ?>
	<div class="navigation"> <br />
	  <br />
	  <div class="col1">
	    <?php next_posts_link('&laquo; Posts mas viejos') ?>
	  </div>
	  <div class="col2" style="text-align:right;">
	    <?php previous_posts_link('Posts mas recientes &raquo;') ?>
	  </div>
	</div>
	<!-- end navigation -->
    <br />
    <br />
    <br clear="all" />
    <?php else : ?>
		<h2>Página no encontrada</h2>
		<p>Lo lamento, lo que buscas, no está aquí.</p>
    <?php endif; ?>

</div><!-- .grid_16 -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>