<?php

  $emTest_logo_path = get_template_directory_uri() . "/images/logo.png";
  $emTest_article_image1 = get_template_directory_uri() . "/images/articleImage1.png";



  function emTest_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'header' , array(
      'title'      => __( 'Header', 'emTest' ),
      'priority'   => 24,
    ) );
    $wp_customize->add_section( 'main_banner' , array(
      'title'      => __( 'Main Banner', 'emTest' ),
      'priority'   => 25,
    ) );
    $wp_customize->add_section( 'section1' , array(
      'title'      => __( 'Article Section', 'emTest' ),
      'priority'   => 26,
    ) );
    $wp_customize->add_section( 'article1' , array(
      'title'      => __( 'Article 1', 'emTest' ),
      'priority'   => 27,
    ) );
    $wp_customize->add_section( 'article2' , array(
      'title'      => __( 'Article 2', 'emTest' ),
      'priority'   => 28,
    ) );
    $wp_customize->add_section( 'article3' , array(
      'title'      => __( 'Article 3', 'emTest' ),
      'priority'   => 29,
    ) );
    $wp_customize->add_section( 'footer' , array(
      'title'      => __( 'Footer', 'emTest' ),
      'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'logo' , array(
      'default' => get_template_directory_uri() . "/images/logo.png"
     ) );
  
    $wp_customize->add_control( new WP_Customize_Image_Control(
           $wp_customize, 'logo',
           array(
               'label'      => __( 'Upload a logo', 'emTest' ),
               'section'    => 'header',
               'settings'   => 'logo', 
           )
    ) );  

    $wp_customize->add_setting( 'banner_heading_1' , array(
      'default'     => 'Lorem ipsum dolor sit amet', 'transport'   => 'postMessage',
     ) );
    $wp_customize->add_setting( 'banner_heading_2' , array(
      'default'     => 'Lorem ipsum dolor sit amet.', 'transport'   => 'postMessage',
     ) );
    $wp_customize->add_setting( 'banner_button_tag' , array(
      'default'     => 'Read More', 'transport'   => 'postMessage',
     ) );
    $wp_customize->add_setting( 'page_background' , array(
      'default' => get_template_directory_uri() . "/images/backImage1.png"
     ) );

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'banner_heading_1',
            array(
                'label'          => __( 'Heading 1', 'emTest' ),
                'section'        => 'main_banner',
                'settings'       => 'banner_heading_1',
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'banner_heading_2',
            array(
                'label'          => __( 'Heading 2', 'emTest' ),
                'section'        => 'main_banner',
                'settings'       => 'banner_heading_2',
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'banner_button_tag',
            array(
                'label'          => __( 'Button Tag', 'emTest' ),
                'section'        => 'main_banner',
                'settings'       => 'banner_button_tag',
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Image_Control(
           $wp_customize, 'page_background',
           array(
               'label'      => __( 'Background Image', 'emTest' ),
               'section'    => 'main_banner',
               'settings'   => 'page_background', 
           )
    ) );

    $wp_customize->add_setting( 'section_heading_1' , array(
      'default'     => 'Lorem ipsum', 'transport'   => 'postMessage',
     ) );
    $wp_customize->add_setting( 'section_heading_2' , array(
      'default'     => 'Lorem ipsum dolor sit amet didi dada.', 'transport'   => 'postMessage',
     ) );

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'section_heading_1',
            array(
                'label'          => __( 'Heading 1', 'emTest' ),
                'section'        => 'section1',
                'settings'       => 'section_heading_1',
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'section_heading_2',
            array(
                'label'          => __( 'Heading 2', 'emTest' ),
                'section'        => 'section1',
                'settings'       => 'section_heading_2',
            )
     ) );
  
    $wp_customize->add_setting( 'article1_heading' , array(
      'default'     => 'Article 1', 'transport'   => 'postMessage',
     ) );

    $wp_customize->add_setting( 'article1_content' , array(
      'default'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
      'transport'   => 'postMessage',
     ) );

    $wp_customize->add_setting( 'article1_image' , array(
      'default' => get_template_directory_uri() . "/images/articleImage1.png"
     ) );

    $wp_customize->add_setting( 'article1_button_tag' , array(
      'default'     => 'Read More', 'transport'   => 'postMessage',
     ) );


    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'article1_heading',
            array(
                'label'          => __( 'Heading', 'emTest' ),
                'section'        => 'article1',
                'settings'       => 'article1_heading',
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'article1_content',
            array(
                'label'          => __( 'Content', 'emTest' ),
                'section'        => 'article1',
                'settings'       => 'article1_content',
                'type'           => 'textarea'
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'article1_button_tag',
            array(
                'label'          => __( 'Button Tag', 'emTest' ),
                'section'        => 'article1',
                'settings'       => 'article1_button_tag',
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Image_Control(
           $wp_customize, 'article1_image',
           array(
               'label'      => __( 'Upload an Image', 'emTest' ),
               'section'    => 'article1',
               'settings'   => 'article1_image', 
           )
    ) );  

    $wp_customize->add_setting( 'article2_heading' , array(
      'default'     => 'Article 2', 'transport'   => 'postMessage',
     ) );

    $wp_customize->add_setting( 'article2_content' , array(
      'default'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
      'transport'   => 'postMessage',
     ) );

    $wp_customize->add_setting( 'article2_image' , array(
      'default' => get_template_directory_uri() . "/images/articleImage2.png"
     ) );

    $wp_customize->add_setting( 'article2_button_tag' , array(
      'default'     => 'Read More', 'transport'   => 'postMessage',
     ) );

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'article2_heading',
            array(
                'label'          => __( 'Heading', 'emTest' ),
                'section'        => 'article2',
                'settings'       => 'article2_heading',
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'article2_content',
            array(
                'label'          => __( 'Content', 'emTest' ),
                'section'        => 'article2',
                'settings'       => 'article2_content',
                'type'           => 'textarea'
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'article2_button_tag',
            array(
                'label'          => __( 'Button Tag', 'emTest' ),
                'section'        => 'article2',
                'settings'       => 'article2_button_tag',
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Image_Control(
           $wp_customize, 'article2_image',
           array(
               'label'      => __( 'Upload an Image', 'emTest' ),
               'section'    => 'article2',
               'settings'   => 'article2_image', 
           )
    ) );  

    $wp_customize->add_setting( 'article3_heading' , array(
      'default'     => 'Article 3', 'transport'   => 'postMessage',
     ) );

    $wp_customize->add_setting( 'article3_content' , array(
      'default'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
      'transport'   => 'postMessage',
     ) );

    $wp_customize->add_setting( 'article3_button_tag' , array(
      'default'     => 'Read More', 'transport'   => 'postMessage',
     ) );

    $wp_customize->add_setting( 'article3_image' , array(
      'default' => get_template_directory_uri() . "/images/articleImage3.png"
     ) );

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'article3_heading',
            array(
                'label'          => __( 'Heading', 'emTest' ),
                'section'        => 'article3',
                'settings'       => 'article3_heading',
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'article3_content',
            array(
                'label'          => __( 'Content', 'emTest' ),
                'section'        => 'article3',
                'settings'       => 'article3_content',
                'type'           => 'textarea'
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'article3_button_tag',
            array(
                'label'          => __( 'Button Tag', 'emTest' ),
                'section'        => 'article3',
                'settings'       => 'article3_button_tag',
            )
     ) );
    $wp_customize->add_control( new WP_Customize_Image_Control(
           $wp_customize, 'article3_image',
           array(
               'label'      => __( 'Upload an Image', 'emTest' ),
               'section'    => 'article3',
               'settings'   => 'article3_image', 
           )
    ) );  
    $wp_customize->add_setting( 'footer_message' , array(
      'default'     => 'Sing up for our newsletter to receive the latest news about our company.', 
      'transport'   => 'postMessage',
     ) );
    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize, 'footer_message',
            array(
                'label'          => __( 'Message', 'emTest' ),
                'section'        => 'footer',
                'settings'       => 'footer_message',
            )
     ) );
    $wp_customize->add_setting( 'footer_background' , array(
      'default' => get_template_directory_uri() . "/images/footerBack1.png"
     ) );
    $wp_customize->add_control( new WP_Customize_Image_Control(
           $wp_customize, 'footer_background',
           array(
               'label'      => __( 'Footer Background', 'emTest' ),
               'section'    => 'footer',
               'settings'   => 'footer_background', 
           )
    ) );

  }

  add_action( 'customize_register', 'emTest_customize_register' );

  function emTest_customizer_live_preview() {
	wp_enqueue_script( 
		  'emTest-theme-customizer',
		  get_template_directory_uri() . '/scripts/theme-customizer.js',
		  array( 'jquery','customize-preview' ),
		  '1.0',
		  true
	);
  }
 
  add_action( 'customize_preview_init', 'emTest_customizer_live_preview' );
?>
