</div>
</div>
<footer>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<ul class="nav nav-pills nav-justified">
				<?php 

				$items = wp_get_nav_menu_items('menufooter');

				foreach( $items as $item ):
					?>
					<li class="nav-item">
						<a class="nav-link" href="<?= $item->url ?>"><?= $item->title?> </a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center monfooter">
				<p>
					&copy; Copyright 2018 - Rémy Pachocinski -Tous droits reservés
				</p>
			</div>
		</div>		
	</div>
</footer>

<?php 
wp_footer(); /* ca charge la barre d'admin */