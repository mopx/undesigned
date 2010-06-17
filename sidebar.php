<div id="sidebar">

<div class="grid_7 prefix_1">

<?php if (is_home()) { ?>


<div id="about"><strong>undesigned</strong> es un theme de Wordpress diseñado para ahorrarte el trabajo de quitarle el diseño a un theme existente, utiliza un framework de CSS llamado <a href="http://960.gs/" target="_blank">960 Grid System</a> y es totalmente gratuito. Este puede ser utilizado como base para tus proyectos.
  </p>
</div>


<div id="contact">
<h2>Contacto</h2>
<p><strong>Email:</strong> info at geekvoice dot com</p>
</div><!-- #contact -->

<?php require("archives_side.php"); ?>

<?php } ?>
<?php if ($post->ID==355) { // about page ?>
<?php } ?>
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



<?php if(function_exists('related_posts')) { ?> 
<div id="related_posts">
<h3>Posts probablemente relacionados</h3>
<ul class="posts">
<?php related_posts(5,20,'',': ','','<br /><br />',false,true); ?>
</ul>
</div><!-- #related_posts -->
<?php } ?>


<?php } ?>


<?php if (is_page("archives") || is_archive() || is_search()) { ?>

<?php require("archives_side.php"); ?>

<?php } ?>


<?php if (!is_page("archives")) { ?>


<?php } ?>



</div><!-- .grid_7 -->

</div><!-- #sidebar -->