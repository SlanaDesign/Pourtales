<?php
/**
 * The template for displaying all single posts
 *Template Name: forfait
*Template Post Type:  forfaits
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Chateau de Pourtalès
 */
get_header();
?>

<section class="forfait">

<?php
echo '<div>';
echo '<article class="image">';
echo '<img src="'.get_the_post_thumbnail_url($forfait->ID).'">';
echo '</article>';
echo '<article class="un">';
echo '<h2>'.get_the_title($forfait->ID).'</h2>';
echo '<h3>'.get_field('titre_2', $forfait->ID).'</h3>';
echo '<p>'.get_field('para_un', $forfait->ID).'</p>';
echo '</article>';
echo '</div>';
echo '<article>';
echo '<h4>'.get_field('titre_3', $forfait->ID).'</h4>';
echo '<p>'.get_field('para_deux', $forfait->ID).'</p>';
echo '<h4>'.get_field('titre_4', $forfait->ID).'</h4>';
echo '<p>'.get_field('para_trois', $forfait->ID).'</p>';
echo '<h4>'.get_field('titre_5', $forfait->ID).'</h4>';
echo '<p>'.get_field('para_quatre', $forfait->ID).'</p>';
echo '<h4>'.get_field('titre_6', $forfait->ID).'</h4>';
echo '<p>'.get_field('para_cinq', $forfait->ID).'</p>';
echo '<h4>'.get_field('titre_7', $forfait->ID).'</h4>';
echo '<p>'.get_field('para_six', $forfait->ID).'</p>';
echo '<h4>'.get_field('titre_8', $forfait->ID).'</h4>';
echo '<p>'.get_field('para_sept', $forfait->ID).'</p>';
echo '</article>';
?>
</section><br><br><br>
<section class="reservation">

  <div class="un">Date d'arrivée <img class="calendar_1" src="<?php echo get_field('calendrier', $forfait->ID) ?>"></div><div>Date de départ<img class="calendar_2" src="<?php echo get_field('calendrier', $forfait->ID) ?>"></div><div>Nb de personne  </div> <button>ok</button>

</section>

<section class="forfait">


<?php echo '<p>'.apply_filters('the_content', get_post_field('post_content', $forfait->ID)).'</p>';?>
</section>


<?php get_footer(); ?>
