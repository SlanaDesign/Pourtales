<?php /* Template Name: Home page */ get_header(); ?>


<main role="main">
	<div class="home-mobile">
		<?php  echo '<img src="'.get_field('image_mobile', $home->ID).'">';
		echo '<h1>'.get_the_title($home->ID).'</h1>';
 ?>

	</div>

	<div class="slider-home">
		<?php

								 $actus = get_posts( array(
									 'posts_per_page' => 3, // -1 pour afficher tous les articles
									 'post_type' => 'actus', // Type articles
									 'category' => '5',
									 'post_status' => 'publish', // statut public uniquement
									 'orderby' => 'post_date', // trier par date
									 'order' => 'ASC' // trier par date décroissante
								 ));

								 foreach( $actus as $actu) {

									 echo '<article class="actu"';
									 echo'<a href="'.post_permalink($actu->ID).'" >';
									 echo '<img src="'.get_the_post_thumbnail_url($actu->ID).'">';
									 echo '</a>';
									 echo '<h2>'.get_field('titre', $actu->ID).'</h2>';
									 echo '</article>';

								 }
								 ?>

	             </div>

							 <section class="reservation">



								 <div class="un">Date d'arrivée <img class="calendar_1" src="<?php echo get_field('calendar', $home->ID) ?>"></div><div>Date de départ<img class="calendar_2" src="<?php echo get_field('calendar', $home->ID) ?>"></div><div>Nb de personne  </div> <button>ok</button>

							 </section>

							 <section class="bienvenue">

								 <h2>Bienvenue au chateau</h2>
								 <hr>
								 <?php

															$Events = get_posts( array(
																'posts_per_page' => 3, // -1 pour afficher tous les articles
																'post_type' => 'Events', // Type articles
																'post_status' => 'publish', // statut public uniquement
																'orderby' => 'post_date', // trier par date
																'order' => 'ASC' // trier par date décroissante
															));

															foreach( $Events as $Event) {

																echo '<article>';
																echo '<div style="background: url('.get_the_post_thumbnail_url($Event->ID, 'large').') no-repeat; background-size: cover; background-position: center;"></div>';
																echo '<a href="'.post_permalink($Event->ID).'" ><h3>'.get_the_title($Event->ID).'</h3></a>';
																echo '<p>'.get_the_excerpt($Event->ID).'</p>';
																echo'<a href="'.post_permalink($Event->ID).'" >en savoir plus...</a>';
																echo '</article>';

															}
															?><br><br><br>

														<a class="ensavoirplus" href="events">et plus encore...</a><br><br><br>
							 </section>


							 <section class="actualites">

								 <article class="actu_un">
									 <h2><a href="">Actualités ‣</a></h2>
									 <?php

																	$actus = get_posts( array(
																		'posts_per_page' => 3, // -1 pour afficher tous les articles
																		'post_type' => 'actus', // Type articles
																		'post_status' => 'publish', // statut public uniquement
																		'orderby' => 'post_date', // trier par date
																		'order' => 'ASC' // trier par date décroissante
																	));

																	foreach( $actus as $actu) {
																		echo '<div class="tuile">';
																		echo '<div class="img">';
																		echo '<img src="'.get_the_post_thumbnail_url($actu->ID).'">';
																		echo '</div>';
																		echo '<div class="text">';
																		echo'<a href="'.post_permalink($actu->ID).'" >';
																		echo '<h2>'.get_the_title($actu->ID).'</h2></a>';
																		echo '<p>'.get_the_excerpt($actu->ID).'</p>';
																		echo '</div>';
																		echo '</div>';

																	}
																	?>

								 </article>

								 <article class="actu_deux">
									 <div class="slider-actu">
 										<?php

 																 $actus = get_posts( array(
 																	 'posts_per_page' => 3, // -1 pour afficher tous les articles
 																	 'post_type' => 'actus', // Type articles
 																	 'post_status' => 'publish', // statut public uniquement
 																	 'orderby' => 'post_date', // trier par date
 																	 'order' => 'DESC' // trier par date décroissante
 																 ));

 																 foreach( $actus as $actu) {

 																	 echo '<div style="background: url('.get_the_post_thumbnail_url($actu->ID).') no-repeat; background-size: cover; background-position: center;">';
 																	 echo'<a href="'.post_permalink($actu->ID).'" >';
 																	 echo '</a>';
 																	 echo '<h2>'.get_the_title($actu->ID).'</h2></a>';
 																	 echo '</div>';

 																 }
 																 ?>

 									             </div>
								 </article>

							 </section>

							 <section class="testimonial">

								 <h2>Ce qu'ils pensent de nous</h2>
								<hr>

<article class="tripvisor">

	<img src="https://static.tacdn.com/img2/branding/rebrand/TA_brand_logo.png">

</article>

<article class="">

	<?php

							 $actus = get_posts( array(
								 'posts_per_page' => 3, // -1 pour afficher tous les articles
								 'post_type' => 'testimonial', // Type articles
								 'post_status' => 'publish', // statut public uniquement
								 'orderby' => 'post_date', // trier par date
								 'order' => 'ASC' // trier par date décroissante
							 ));

							 foreach( $actus as $actu) {

								 echo '<article class="avis">';
 							 	 echo '<div class="photo" style="background: url('.get_the_post_thumbnail_url($actu->ID).') no-repeat; background-size: cover; background-position: center;">';
								 echo '</div>';
								 echo '<div class="testimonial_text">';
								 echo '<h2>'.get_the_title($actu->ID).'</h2></a>';
								 echo '<p>'.apply_filters('the_content', get_post_field('post_content', $actu->ID)).'</p>';
								 echo '</div>';
								 echo '</article>';

							 }
							 ?>

</article>

							 </section>
</main>



<?php get_footer(); ?>
