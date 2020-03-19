<?php 

get_header();

if( have_posts()) : 

	while (have_posts()) : the_post();

		$titre = get_the_title();
		$description = get_the_excerpt();
		$date_heure = get_field('date_et_heure');
		$image = get_field('image');
		$salle = get_field('salle');
		$lien = get_the_permalink();


		?>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<img class="img-fluid" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"></img>
					</div>
					<div class="col-sm-8">
						<h2><a href="<?= $lien ?>"><?= $titre ?></a></h2>
						<p><?= $salle ?> - <?= $date_et_heure ?></p>
						<p><?= $description ?></p>
					</div>
				</div>
			</div>

		<?php
	endwhile;

endif;




get_footer();
