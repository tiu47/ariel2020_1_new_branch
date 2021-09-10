<?php


// esto es para customizer que aprece en el admin
// basicamente se pude crear un campo  y con eso dar opciones
// este ejemplo es e lupdate del copyright en el footer




function ariel_theme_customizer( $wp_customize ){


	// Copyright Section

	$wp_customize->add_section( 
		'sec_copyright', array(
			'title' 		=> __( 'Copyright Settings', 'fancy-lab'),
			'description' 	=> __( 'Copyright Section', 'fancy-lab' )
		)
	);

			// Field 1 - Copyright Text Box
			$wp_customize->add_setting(
				'set_copyright', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_copyright', array(
					'label' 		=> __( 'Copyright', 'fancy-lab' ),
					'description' 	=> __( 'Please, add your copyright information here', 'fancy-lab' ),
					'section' 		=> 'sec_copyright',
					'type' 			=> 'text'
				)
			);




}




add_action( 'customize_register', 'ariel_theme_customizer' );

