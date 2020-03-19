<?php 

// récuperation des informations

$slides = array();
$slides[] = get_field('z1_slide_1'); 
$slides[] = get_field('z1_slide_2'); 
$slides[] = get_field('z1_slide_3'); 

/*echo "<pre>";
var_dump($slides);
echo "</pre>";
*/
?>

</div>
</div>
<div class="container">
	
	<div class="row">
		
		<div class="col-12">
			
			<div id="monslider" class="carousel slide" data-ride="carousel">

			<!-- indicateurs -->

				<ol class="carousel-indicators">
				<?php 

					foreach( $slides as $key => $valeur ) :

					$class_active = '';

					if ( $key == 0 ) $class_active = 'class="active"';

					?>

						<li data-target="#monslider" data-slide-to="<?= $key?>" <?= $class_active?> ></li>

					<?php 
					endforeach;
					?>
				</ol>

				<!-- images -->
				<div class="carousel-inner" role="listbox">
					<?php
 						foreach( $slides as $key => $valeur ) :
 							$slide_active='';
 								if ( $key == 0 ) $slide_active = "active";
 								?>
 								<div class="carousel-item <?= $slide_active ?>">

 									<img class="d-block img-fluid" src="<?= $valeur['url'] ?>" alt="<?= $valeur['alt'] ?>">
 									


 								</div>
 								<?php 

 						endforeach;		
 						?>			
				</div>

				<!-- fleches -->
				
				<a href="#monslider" class="carousel-control-prev" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
					<span class="sr-only">Précèdent</span>
				</a>

				<a href="#monslider" class="carousel-control-next" role="button" data-slide="next">
					<span class="carousel-control-next-icon"></span>
					<span class="sr-only">Suivant</span>
				</a>
				

				

			</div>

		</div>

	</div>

</div>