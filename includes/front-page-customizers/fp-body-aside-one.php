<?php

function aside_one_customizer($wp_customize) {
  
  // $lorem placeholder and theme title
  require get_template_directory().'/includes/front-page-customizers/placeholder-data.php';

 $wp_customize->add_section('aside_one', array(
  'title' => __('Aside One', $themeTitle),
  'description' => sprintf(__('Options for Aside One', $themeTitle)),
  'priority' => 4
  ));

  // Heading
  $wp_customize->add_setting('aside_one_heading', array(
    'default' => 'Small Aside 1 Heading', $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('aside_one_heading', array(
    'label' => __('Heading', $themeTitle),
    'section' => 'aside_one',
    'priority' => 1
  ));

  // Content Text

  $wp_customize->add_setting('aside_one_content', array(
    'default' => "{$lorem}", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('aside_one_content', array( 
    'label' => __('Content', $themeTitle),
    'section' => 'aside_one',
    'priority' => 2
  ));

  // Gallery images
  // gallery one
  $wp_customize->add_setting('aside_one_gallery_one', array(
    'default' => get_bloginfo('template_directory') . '/images/gallery/fulls/01.jpg',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aside_one_gallery_one', 
    array(
      'label' => __('Gallery Image 1', $themeTitle),
      'section' => 'aside_one',
      'settings' => 'aside_one_gallery_one',
      'priority' => 3
    )
    ));
  // gallery two
  $wp_customize->add_setting('aside_one_gallery_two', array(
    'default' => get_bloginfo('template_directory') . '/images/gallery/fulls/02.jpg',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aside_one_gallery_two', 
    array(
      'label' => __('Gallery Image 2', $themeTitle),
      'section' => 'aside_one',
      'settings' => 'aside_one_gallery_two',
      'priority' => 4
    )
    ));
  // gallery three
  $wp_customize->add_setting('aside_one_gallery_three', array(
    'default' => get_bloginfo('template_directory') . '/images/gallery/fulls/03.jpg',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aside_one_gallery_three', 
    array(
      'label' => __('Gallery Image 3', $themeTitle),
      'section' => 'aside_one',
      'settings' => 'aside_one_gallery_three',
      'priority' => 5
    )
    ));
  // gallery four
  $wp_customize->add_setting('aside_one_gallery_four', array(
    'default' => get_bloginfo('template_directory') . '/images/gallery/fulls/04.jpg',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aside_one_gallery_four', 
    array(
      'label' => __('Gallery Image 4', $themeTitle),
      'section' => 'aside_one',
      'settings' => 'aside_one_gallery_four',
      'priority' => 6
    )
    ));

  
}

add_action('customize_register', 'aside_one_customizer');