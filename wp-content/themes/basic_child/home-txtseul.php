<?php

$txt_centre = get_field('z4_texte_seul');

?>

<div class="container">
	<div class="row">
		<div class="col-6"> <?= $txt_centre ?></div>
		<div class="col-6">
			<?php 
				dynamic_sidebar('sidebar-perso'); //id de la zone a widgets
			?>
		</div>
	</div>
</div>