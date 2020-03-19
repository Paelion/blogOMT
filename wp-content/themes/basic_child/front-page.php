<?php

get_header(); /* pour recuper les elements du wordpress */


if ( have_posts() ) : /* si j'ai des posts */

	while( have_posts() ) : /* tant que j'ai des posts */

		the_post(); /* je charge les infos du post */

		// the_title(); 
		echo "<h1>" . get_the_title() . "</h1>";

		get_template_part('home', 'slider');
		get_template_part('home', '3txt');
		get_template_part('home', 'imgparallax');
		get_template_part('home', 'txtseul');
		get_template_part('home', 'vignettes');

	endwhile;

endif;





get_footer(); /* pour recuper les elements du wordpress */

