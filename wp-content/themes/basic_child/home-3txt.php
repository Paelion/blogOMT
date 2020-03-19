<?php

$txt_gauche = get_field('z2_texte_gauche');
$txt_centre = get_field('z2_texte_central');
$txt_droit = get_field('z2_texte_droit');

?>

<div class="container">
	<div class="row">
		<div class="col-sm-4"> <?= $txt_gauche ?></div>
		<div class="col-sm-4"> <?= $txt_centre ?></div>
		<div class="col-sm-4"> <?= $txt_droit ?></div>
	</div>
</div>