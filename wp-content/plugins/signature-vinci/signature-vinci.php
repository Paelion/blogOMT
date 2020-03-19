<?php 

/*

Plugin Name: Signature Vinci
Description : Plugin qui génère une signature
Author: Frédéric
Version: 1.0

*/

add_action('init','register_shortcode_signature');

function register_shortcode_signature()
{
	add_shortcode('signature','genere_signature');

}

function genere_signature($params=array(), $content=null){
	$signature='<div class="text-center">
					<p><strong>Pachocinski Rémy</strong><br>
					etudiant en deuxieme année en dev web</p>
				</div>';
	return $signature;

}