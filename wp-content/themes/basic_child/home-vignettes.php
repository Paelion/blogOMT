<?php 

$vgnettes = array();
$vignettes[] = get_field('z5_vignette_1');
$vignettes[] = get_field('z5_vignette_2');
$vignettes[] = get_field('z5_vignette_3');
$vignettes[] = get_field('z5_vignette_4');


?>

<div class="container">
	<div class="row">
		<?php
		foreach( $vignettes as $vignette ): 
		?>
		<div class="col-md-3">
			<img class="img-fluid rounded-circle" src="<?= $vignette['url'] ?>" alt="?= $vignette['alt'] ?>"></img>
			<div class="caption text-center">
				<?= $vignette['caption'] ?>
			</div>
		</div>
<?php endforeach; ?>

	</div>
</div>