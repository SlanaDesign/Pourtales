<?php /* Template Name: Home page */ get_header(); ?>


<main role="main">

	<div class="slider-home">
		<?php

								 $actus = get_posts( array(
									 'posts_per_page' => 3, // -1 pour afficher tous les articles
									 'post_type' => 'html5-blank', // Type articles
									 'category' => '5',
									 'post_status' => 'publish', // statut public uniquement
									 'orderby' => 'post_date', // trier par date
									 'order' => 'ASC' // trier par date décroissante
								 ));

								 foreach( $actus as $actu) {

									 echo'<a href="'.post_permalink($actu->ID).'" >';
									 echo '<img src="'.get_the_post_thumbnail_url($actu->ID).'">';
									 echo '<h2>'.get_the_title($actu->ID).'</h2>';
									 echo '</a>';

								 }
								 ?>
	             </div>


</main>

<?php get_footer(); ?>
