<?php

function showcase_customizer($wp_customize) {

  // $lorem placeholder and theme title
  require get_template_directory().'/includes/front-page-customizers/placeholder-data.php';

  // Showcase Section
  $wp_customize->add_section('showcase', array(
    'title' => __('Showcase', $themeTitle),
    'description' => sprintf(__('Options for Showcase', $themeTitle)),
    'priority' => 1
  ));

  //Image

  $wp_customize->add_setting('showcase_img', array(
    'default' => get_bloginfo('template_directory') . '/images/pic01.jpg',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_img', 
    array(
      'label' => __('Showcase Image', $themeTitle),
      'section' => 'showcase',
      'settings' => 'showcase_img',
      'priority' => 1
    )
    ));

  //Heading

  $wp_customize->add_setting('showcase_heading', array(
    'default' => _x('Hello World', $themeTitle),
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_heading', array(
    'label' => __('Heading', $themeTitle),
    'section' => 'showcase',
    'priority' => 2
  ));

  //Subheading

  $wp_customize->add_setting('showcase_subheading', array(
    'default' => _x('Just Another Wordpress Site', $themeTitle),
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('showcase_subheading', array(
    'label' => __('Sub Heading', $themeTitle),
    'section' => 'showcase',
    'priority' => 3
  ));








}


add_action('customize_register', 'showcase_customizer');


