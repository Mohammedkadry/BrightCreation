<?php get_header(); ?>
<div id="content">
<h1>first template</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><a href="<?php the_permalink()?> "><?php the_title()?></a></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p>author: <?php the_author()?></p>
<p><?php the_content(__('(more...)')); ?></p>
<hr> <?php endwhile;  ?>
<?php endif; ?>
<h1>second template</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><a href="<?php the_permalink()?> "><?php the_title()?></a></h1>
<hr> <?php endwhile;  ?>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<div id="delimiter">
</div>
<?php get_footer(); ?>