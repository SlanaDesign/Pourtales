<?php /* Template Name: Forfaits*/ get_header(); ?>

<section class="forfaits">
  <?php
   echo '<div class="forfaits_image" style="background: url('.get_the_post_thumbnail_url().') no-repeat; background-size: cover; background-position: center;">';
   echo '</div>';
   echo '<div class="rouge_forfaits">';
   echo '</div>';
   echo '<div class="h2">';
   echo '<h2>'.get_field('titre', $forfaits->ID).'</h2>';
   echo '</div>';

   ?>

<br><br><br><br><h2 class="nos_forfaits">Nos différents forfaits</h2><br><br><br><br>
<?php

               $forfaits = get_posts( array(
                 'posts_per_page' => -1, // -1 pour afficher tous les articles
                 'post_type' => 'Forfaits', // Type articles
                 'post_status' => 'publish', // statut public uniquement
                 'orderby' => 'post_date', // trier par date
                 'order' => 'ASC' // trier par date décroissante
               ));

               foreach( $forfaits as $forfait) {
                 echo '<article>';
                 echo '<div style="background: url('.get_the_post_thumbnail_url($forfait->ID).') no-repeat; background-size: cover; background-position: center;">';
                 echo '</div>';
                 echo'<a href="'.post_permalink($forfait->ID).'" >';
                 echo '<h2>'.get_the_title($forfait->ID).'</h2></a>';
                 echo '</article>';

               }
               ?>
</section><br><br><br>
<?php get_footer(); ?>
