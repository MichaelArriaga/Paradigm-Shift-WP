<?php


function fp_footer_customizer($wp_customize) {

  // $lorem placeholder and theme title
  require get_template_directory().'/includes/front-page-customizers/placeholder-data.php';

  $wp_customize->add_section('fp_footer', array(
    'title' => __('Footer', $themeTitle),
    'description' => sprintf(__('Options for Footer', $themeTitle)),
    'priority' => 9
  ));

  // Section Header

  $wp_customize->add_setting('footer_heading', array(
    'default' => 'Get In Touch', $themeTitle,
    'type' => 'theme_mod'
  ));
  
  $wp_customize->add_control('footer_heading', array(
    'label' => __('Heading', $themeTitle),
    'section' => 'fp_footer',
    'priority' => 1
  ));

  // Section Content Top

  $wp_customize->add_setting('footer_content', array(
    'default' => "<strong> Footer Content Strong </strong> {$lorem}", $themeTitle,
    'type' => 'theme_mod'
  ));
  
  $wp_customize->add_control('footer_content', array(
    'label' => __('Content', $themeTitle),
    'section' => 'fp_footer',
    'priority' => 1
  ));

  // Email
  
  $wp_customize->add_setting('footer_email', array(
    'default' => 'information@untitled.ext', $themeTitle,
    'type' => 'theme_mod'
  ));
  
  $wp_customize->add_control('footer_email', array(
    'label' => __('Email', $themeTitle),
    'section' => 'fp_footer',
    'priority' => 1
  ));

  // Phone

  $wp_customize->add_setting('footer_phone', array(
    'default' => '(555) 555-5555', $themeTitle,
    'type' => 'theme_mod'
  ));
  
  $wp_customize->add_control('footer_phone', array(
    'label' => __('Phone', $themeTitle),
    'section' => 'fp_footer',
    'priority' => 1
  ));

  // Address

  $wp_customize->add_setting('footer_address', array(
    'default' => '1234 Somewhere Road, Nashville, TN 00000', $themeTitle,
    'type' => 'theme_mod'
  ));
  
  $wp_customize->add_control('footer_address', array(
    'label' => __('My Address', $themeTitle),
    'section' => 'fp_footer',
    'priority' => 1
  ));

  // Social Icons - Addresses

  // Twitter
  $wp_customize->add_setting('footer_icon_twitter_address', array(
    'default' => 'https://twitter.com/', $themeTitle,
    'type' => 'theme_mod'
  ));
  
  $wp_customize->add_control('footer_icon_twitter_address', array(
    'label' => __('Twitter Address', $themeTitle),
    'section' => 'fp_footer',
    'priority' => 1
  ));

  // Facebook
  $wp_customize->add_setting('footer_icon_facebook_address', array(
    'default' => 'https://facebook.com/', $themeTitle,
    'type' => 'theme_mod'
  ));
  
  $wp_customize->add_control('footer_icon_facebook_address', array(
    'label' => __('Facebook Address', $themeTitle),
    'section' => 'fp_footer',
    'priority' => 1
  ));
  // Instagram
  $wp_customize->add_setting('footer_icon_instagram_address', array(
    'default' => 'https://instagram.com/', $themeTitle,
    'type' => 'theme_mod'
  ));
  
  $wp_customize->add_control('footer_icon_instagram_address', array(
    'label' => __('Instagram Address', $themeTitle),
    'section' => 'fp_footer',
    'priority' => 1
  ));

  // LinkedIn
  $wp_customize->add_setting('footer_icon_linkedin_address', array(
    'default' => 'https://linkedin.com/', $themeTitle,
    'type' => 'theme_mod'
  ));
  
  $wp_customize->add_control('footer_icon_linkedin_address', array(
    'label' => __('LinkedIn Address', $themeTitle),
    'section' => 'fp_footer',
    'priority' => 1
  ));

  // Github
  $wp_customize->add_setting('footer_icon_github_address', array(
    'default' => 'https://github.com/', $themeTitle,
    'type' => 'theme_mod'
  ));
  
  $wp_customize->add_control('footer_icon_github_address', array(
    'label' => __('Github Address', $themeTitle),
    'section' => 'fp_footer',
    'priority' => 1
  ));

  // Codepen
  $wp_customize->add_setting('footer_icon_codepen_address', array(
    'default' => 'https://codepen.io/', $themeTitle,
    'type' => 'theme_mod'
  ));
  
  $wp_customize->add_control('footer_icon_codepen_address', array(
    'label' => __('Codepen Address', $themeTitle),
    'section' => 'fp_footer',
    'priority' => 1
  ));
  
  



}

add_action('customize_register', 'fp_footer_customizer');


  // $wp_customize->add_setting('hook', array(
  //   'default' => 'default', $themeTitle,
  //   'type' => 'theme_mod'
  // ));
  
  // $wp_customize->add_control('hook', array(
  //   'label' => __('label', $themeTitle),
  //   'section' => 'fp_footer',
  //   'priority' => 1
  // ));
