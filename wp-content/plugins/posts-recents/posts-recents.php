<?php 
/*

Plugin Name: Post Recent
Description : affiche les n posts du ou des types de post fournis en paramètre (n = 1,2,3,4 ou 6)
Author: Rémy
Version: 1.0

*/

add_action('init','register_shortcode_recents');

function register_shortcode_recents()
{
	add_shortcode('post-recents','affiche_posts_recents');

}

function affiche_posts_recents($params=array(), $content=null){

	//var_dump($params);

	$types = explode(',',$params['types']);
	$nb = $params['nb'];
	$espace = 12 / $nb;

	$return_string = '<div class="row">';

		query_posts(array(
			'orderby' => 'date',
			'order'	=> 'DESC',
			'showposts' => $nb,
			'post_type' => $types


		));

		// exploiter la requete

		if( have_posts()): 

			while(have_posts()) : the_post();

				if (get_post_type() == 'concert'):
					$image = '<img src="' . get_field('image')['url'] . '" >';
				else:
					$image = get_the_post_thumbnail(null, 'thumbnail', array(
						"class" => "img-fluid wp-post-image"
							));
				endif;
				$return_string .= ' <div class="col-md-' . $espace .'">
									<h2><a href="' . get_the_permalink() . '"> ' . get_the_title() . '</a></h2>' . $image . ' <p>' . get_the_excerpt() . '</p> </div>';

			endwhile;

		endif;

		wp_reset_query();


	$return_string .= '</div>';

	return $return_string;

}