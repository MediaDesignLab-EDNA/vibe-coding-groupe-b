<?php
/**
 * Thème enfant · Les Nuits du Quai
 */

// Charge la feuille de styles du thème enfant.
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'festival-child',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
} );

// Affiche en bas de page la version du thème réellement en ligne (écrite par le déploiement).
add_action( 'wp_footer', function () {
	$fichier = get_stylesheet_directory() . '/version.txt';
	if ( file_exists( $fichier ) ) {
		printf(
			'<p class="version-deployee" style="text-align:center;font-size:12px;opacity:.6">Version %s</p>',
			esc_html( trim( file_get_contents( $fichier ) ) )
		);
	}
} );
