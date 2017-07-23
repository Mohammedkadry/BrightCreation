<?php get_header(); ?>
<div>
<?php while (have_posts()) : the_post(); ?>
<h2> <?php the_title()?></h2>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p>author: <?php the_author()?></p>
<?php the_content();?>
<p>excerpt: <?php the_excerpt()?></p>
<?php endwhile;?>
<?php comments_template('',true);?>
</div>
<?php get_footer(); ?>
<?php get_sidebar(); ?>

