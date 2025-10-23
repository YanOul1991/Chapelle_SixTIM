<?php
/**
 * Customizer: réglages pour les réseaux sociaux (4 entrées)
 */

if ( ! function_exists( 'chapellesixtim_sanitize_url' ) ) {
	function chapellesixtim_sanitize_url( $url ) {
		return esc_url_raw( $url );
	}
}

if ( ! function_exists( 'chapellesixtim_sanitize_text' ) ) {
	function chapellesixtim_sanitize_text( $text ) {
		return sanitize_text_field( $text );
	}
}

function chapellesixtim_customize_register( $wp_customize ) {

	// Section réseaux sociaux
	$wp_customize->add_section( 'chapellesixtim_socials', array(
		'title'    => __( 'Réseaux sociaux', 'chapellesixtim' ),
		'priority' => 30,
	) );

	// Pour 4 réseaux: social_1 ... social_4
	for ( $i = 1; $i <= 4; $i++ ) {
		$prefix = "social_{$i}";

		// URL
		$wp_customize->add_setting( "{$prefix}_url", array(
			'default'           => '',
			'sanitize_callback' => 'chapellesixtim_sanitize_url',
			'transport'         => 'refresh',
		) );

		$wp_customize->add_control( "{$prefix}_url_control", array(
			'label'    => sprintf( __( 'Lien %d', 'chapellesixtim' ), $i ),
			'section'  => 'chapellesixtim_socials',
			'settings' => "{$prefix}_url",
			'type'     => 'url',
		) );

		// Icon (image)
		$wp_customize->add_setting( "{$prefix}_icon", array(
			'default'           => '',
			'sanitize_callback' => 'chapellesixtim_sanitize_url',
			'transport'         => 'refresh',
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "{$prefix}_icon_control", array(
			'label'    => sprintf( __( 'Icône %d', 'chapellesixtim' ), $i ),
			'section'  => 'chapellesixtim_socials',
			'settings' => "{$prefix}_icon",
		) ) );

		// Name (pour alt/aria)
		$wp_customize->add_setting( "{$prefix}_name", array(
			'default'           => '',
			'sanitize_callback' => 'chapellesixtim_sanitize_text',
			'transport'         => 'refresh',
		) );

		$wp_customize->add_control( "{$prefix}_name_control", array(
			'label'    => sprintf( __( 'Nom %d (alt)', 'chapellesixtim' ), $i ),
			'section'  => 'chapellesixtim_socials',
			'settings' => "{$prefix}_name",
			'type'     => 'text',
		) );
	}

}

add_action( 'customize_register', 'chapellesixtim_customize_register' );


