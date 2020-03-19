<?php

$img = get_field("z3_image");
$url_image = $img['url'];
$hauteur = get_field("z3_hauteur");


?>
</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 img_parallax" style="background:url(<?= $url_image ?>); height: <?= $hauteur ?>px;"></div>
	</div>
</div>