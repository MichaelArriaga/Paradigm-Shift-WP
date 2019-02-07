<?php

function aside_two_customizer($wp_customize) {

  // $lorem placeholder and $themeTitle
  require get_template_directory().'/includes/front-page-customizers/placeholder-data.php';

 $wp_customize->add_section('aside_two', array(
  'title' => __('Aside Two', $themeTitle),
  'description' => sprintf(__('Options for Aside Two', $themeTitle)),
  'priority' => 5
  ));

  // Heading
  $wp_customize->add_setting('aside_two_heading', array(
    'default' => 'Small Aside 2 Heading', $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('aside_two_heading', array(
    'label' => __('Heading', $themeTitle),
    'section' => 'aside_two',
    'priority' => 1
  ));

  // Content Text

  $wp_customize->add_setting('aside_two_content', array(
    'default' => "{$lorem}", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('aside_two_content', array( 
    'label' => __('Content', $themeTitle),
    'section' => 'aside_two',
    'priority' => 2
  ));

  // Gallery images
  // gallery one
  $wp_customize->add_setting('aside_two_gallery_one', array(
    'default' => get_bloginfo('template_directory') . '/images/gallery/fulls/05.jpg',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aside_two_gallery_one', 
    array(
      'label' => __('Gallery Image 1', $themeTitle),
      'section' => 'aside_two',
      'settings' => 'aside_two_gallery_one',
      'priority' => 3
    )
    ));
  // gallery two
  $wp_customize->add_setting('aside_two_gallery_two', array(
    'default' => get_bloginfo('template_directory') . '/images/gallery/fulls/06.jpg',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aside_two_gallery_two', 
    array(
      'label' => __('Gallery Image 2', $themeTitle),
      'section' => 'aside_two',
      'settings' => 'aside_two_gallery_two',
      'priority' => 4
    )
    ));
  // gallery three
  $wp_customize->add_setting('aside_two_gallery_three', array(
    'default' => get_bloginfo('template_directory') . '/images/gallery/fulls/07.jpg',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aside_two_gallery_three', 
    array(
      'label' => __('Gallery Image 3', $themeTitle),
      'section' => 'aside_two',
      'settings' => 'aside_two_gallery_three',
      'priority' => 5
    )
    ));
  
}

add_action('customize_register', 'aside_two_customizer');