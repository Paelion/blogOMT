<?php 

get_header();

if( have_posts()) : 

	while (have_posts()) : the_post();

		$titre = get_the_title();
		$description = get_the_excerpt();
		$date_heure = get_field('date_et_heure');
		$image = get_field('image');
		$salle = get_field('salle');
		
		$prix = get_field('prix');
		$infos_prix = get_field_object('prix');
		// var_dump( $infos_prix )
		$adresse = get_field('adresse');
		$devise = $infos_prix['append'];

		

		?>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<img class="img-fluid" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"></img>
					</div>
					<div class="col-sm-8">
						<h2><a href="<?= $lien ?>"></a><?= $titre ?></h2>
						<p><?= $salle ?> - <?= $date_et_heure ?></p>
						<p><?= $adresse ?></p>
						<p><?= $prix . ' ' . $devise ?></p>
						<p><?= $description ?></p>
					</div>
				</div>
			</div>

		<?php
	endwhile;

endif;




get_footer();
