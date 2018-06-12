<?php /* Template Name: Chateau */ get_header(); ?>

<section class="chateau">
  <?php
   echo '<img src="'.get_the_post_thumbnail_url($chateau->ID).'">';
  echo '<article class="histoire">'.apply_filters('the_content', get_post_field('post_content', $chateau->ID)).'</article>';
  echo '<article>'.get_field('mission', $chateau->ID).'</article>';


   ?>
</section>

<?php get_footer(); ?>
