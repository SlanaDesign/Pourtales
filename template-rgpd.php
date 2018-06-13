<?php /* Template Name: RGPD */ get_header(); ?>

<section class="chateau">
  <?php
//   echo '<img src="'.get_the_post_thumbnail_url($chateau->ID).'">';
//  echo '<article class="histoire">'.apply_filters('the_content', get_post_field('post_content', $chateau->ID)).'</article>';
//  echo '<article>'.get_field('mission', $chateau->ID).'</article>';
// ?>

   <?php

    echo '<div class="forfaits_image" style="background: url('.get_the_post_thumbnail_url().') no-repeat; background-size: cover; background-position: center;">';
    echo '</div>';
    echo '<div class="rouge_forfaits">';
    echo '</div>';
    echo '<div class="h2">';
    echo '<h2>'.get_field('titre', $rgpd->ID).'</h2>';
    echo '</div>';

    ?>

</section>

<section class="rgpd">

  <?php echo '<article class="histoire">';
  echo '<div>';
  echo '<p>'.apply_filters('the_content', get_post_field('post_content', $rgpd->ID)).'</p>';
  echo '</div>';
  echo '</article>';
   ?>

</section><br><br><br>
<?php get_footer(); ?>
