<h2>Archivo</h2>
<div id="archives">
<?php if(function_exists('smartArchives')) { ?>
<?php smartArchives('block',''); ?>
<?php } else { ?>
<ul>
<?php wp_get_archives('type=yearly'); ?>
</ul>
<?php } ?>
</div>

<div id="categories">
<h2>Categorías</h2>
<?php if (function_exists('category_cloud')) { ?>
<div id="category_cloud">
<?php category_cloud();?>
</div>
<?php } else {?>
<ul>
<?php wp_list_categories('title_li='); ?>
</ul>
<?php } ?>
</div><!-- #categories -->