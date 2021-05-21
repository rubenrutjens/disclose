<?php


function theme_support() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_support');

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }

    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

    return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);

  if (count($content) >= $limit) {
      array_pop($content);
      $content = implode(" ", $content) . '...';
  } else {
      $content = implode(" ", $content);
  }

  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);

  return $content;
}





function load_stylesheet() {


    wp_register_style('style-frontpage',get_template_directory_uri(). '/stylesheet-frontpage.css', array(), '1','all');
    wp_enqueue_style('style-frontpage');

    wp_register_style('style-navigation',get_template_directory_uri(). '/stylesheet-menu.css', array(), '1','all');
    wp_enqueue_style('style-navigation');

    wp_register_style('style-main',get_template_directory_uri(). '/style.css', array(), '1','all');
    wp_enqueue_style('style-main');
    
    wp_register_style('bootstrapcss',get_template_directory_uri(). '/bootstrap.css', array(), '1','all');
    wp_enqueue_style('bootstrapcss');

    wp_register_style('media-queries',get_template_directory_uri(). '/media-queries.css', array(), '1','all');
    wp_enqueue_style('media-queries');

    wp_register_style('style-stramien',get_template_directory_uri(). '/stylesheet-stramien.css', array(), '1','all');
    wp_enqueue_style('style-stramien');

    wp_register_style('style-blog',get_template_directory_uri(). '/stylesheet-blog.css', array(), '1','all');
    wp_enqueue_style('style-blog');

    wp_register_style('style-contact',get_template_directory_uri(). '/stylesheet-contact.css', array(), '1','all');
    wp_enqueue_style('style-contact');

}
add_action( 'wp_enqueue_scripts', 'load_stylesheet' );



function load_js() {

    // wp_deregister_script('jquery');
    wp_register_script('jquery',get_template_directory_uri(). '/js/jquery.js', array(), '1','all');
    wp_enqueue_script('jquery');
    // wp_deregister_script('popper');
    wp_register_script('popper',get_template_directory_uri(). '/js/popper.js', array(), '1','all');
    wp_enqueue_script('popper');
    
    // wp_deregister_script('bootstrap');
    wp_register_script('bootstrap',get_template_directory_uri(). '/js/bootstrap.js', array(), '1','all');
    wp_enqueue_script('bootstrap');
    
    // wp_deregister_script('menu');
    wp_register_script('menu', get_template_directory_uri(). '/js/menu.js', array(), '1','all');
    wp_enqueue_script('menu');

    if(is_page(5)) { //front page
        // wp_deregister_script('scroll');
        wp_register_script('scroll', get_template_directory_uri(). '/js/scrollStop.js', array(), '1','all');
        wp_enqueue_script('scroll');

        // wp_deregister_script('shrink');
        wp_register_script('shrink', get_template_directory_uri(). '/js/shrinkLogo.js', array(), '1','all');
        wp_enqueue_script('shrink');

        // wp_deregister_script('prevent');
        wp_register_script('prevent', get_template_directory_uri(). '/js/preventTransitionRemove.js', array(), '1','all');
        wp_enqueue_script('prevent');

        // wp_deregister_script('prevent');
        wp_register_script('main', get_template_directory_uri(). '/js/main.js', array(), '1','all');
        wp_enqueue_script('main');

    } else {
        // wp_deregister_script('shrink');
        wp_register_script('shrinkStramien', get_template_directory_uri(). '/template-parts/blog/js/shrinkLogoStramien.js', array(), '1','all');
        wp_enqueue_script('shrinkStramien');
    }

}
add_action('wp_enqueue_scripts', 'load_js');



function homepage_article_content_section($wp_customize) {


    $wp_customize->add_panel('panel_homepage',array(
        'title'=>__('Homepage Section'),
        'description' => 'Section to edit homepage'
    ));

    
    $description_homepage = '<p>' . __( 'All the information about the homepage can be found here. To edit, simply go to the correct section and type the information.' ) . '</p>';
    $wp_customize->add_section('homepage-first-callout-section', array(
        'description' => $description_middle_section,
        'panel' => 'panel_homepage',
        'priority' => 100,
        'title' => "Article Section"
    ));


    //
    //First section : TEXT
    //
    $wp_customize->add_setting('text-callout-first-section', array( 
                                                                'default' => 'Info for text section',
                                                                'sanitize_callback' => 'sanitize_text_field' ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
    homepage-callout-first-section-text-control', array(
        'label' => 'Text',
        'section' => 'homepage-first-callout-section',
        'settings' => 'text-callout-first-section',
    )));

    //
    //First section : BUTTON
    //
    $wp_customize->add_setting('button-callout-first-section', array( 
                                                                'default' => 'Info for button section',
                                                                'sanitize_callback' => 'sanitize_text_field' ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
    homepage-callout-first-section-button-control', array(
        'label' => 'Button',
        'section' => 'homepage-first-callout-section',
        'settings' => 'button-callout-first-section',
    )));

    //
    //First section : IMAGE
    //
    $wp_customize->add_setting('image-callout-first-section', array(
        'default' =>'',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, '
    homepage-callout-first-section-image-control', array(
        'label' => 'Image',
        'section' => 'homepage-first-callout-section',
        'settings' => 'image-callout-first-section',
    )));

}
add_action('customize_register','homepage_article_content_section'); 


function homepage_quote_content_section($wp_customize) {

    $description_homepage = '<p>' . __( 'All the information about the homepage can be found here. To edit, simply go to the correct section and type the information.' ) . '</p>';
    $wp_customize->add_section('homepage-quote-callout-section', array(
        'description' => $description_middle_section,
        'panel' => 'panel_homepage',
        'priority' => 100,
        'title' => "Quote Section"
    ));

    //
    // Quote Text
    //

    $wp_customize->add_setting('text-callout-quote-section', array( 
                                                                'default' => 'Info for text section',
                                                                'sanitize_callback' => 'sanitize_text_field' ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
    homepage-callout-quote-section', array(
        'label' => 'Text',
        'section' => 'homepage-quote-callout-section',
        'settings' => 'text-callout-quote-section',
    )));

}
add_action('customize_register','homepage_quote_content_section'); 



$expertiseCreated;

function arrayExpertise() {

    global $expertiseCreated;
    $expertiseCreated = array("1","2","3");


    return $expertiseCreated;
}



function homepage_expertise_content_section($wp_customize) {

    $expertiseCreated2 = arrayExpertise();
    foreach ($expertiseCreated2 as $expertiseCreated) {     
        // Used to create own panel in the customizer   
        $wp_customize->add_panel('panel_expertise',array(
            'title'=>__('Expertise Section'),
            'description' => 'expertise settings'
        ));


        // This adds all the controls to the correct panel. In this case it is the Expertise Panel
        $wp_customize->add_section('homepage-expertise-callout-section'.$expertiseCreated[$i], array(
            'description' => "edit all expertise settings here",
            'panel' => 'panel_expertise',
            'priority' => 100,
            'title' => "Expertise Section - " . $expertiseCreated[$i]
        ));

        //
        // Expertise section : TITLE
        //
        $wp_customize->add_setting('title-callout-expertise-section'.$expertiseCreated[$i], array(
            'default' => 'Nog in te vullen'
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
        homepage-callout-expertise-section-title'.$expertiseCreated[$i], array(
            'label' => 'Title',
            'section' => 'homepage-expertise-callout-section'.$expertiseCreated[$i],
            'settings' => 'title-callout-expertise-section'.$expertiseCreated[$i],
            'type' => 'text'
        )));
        //
        // Expertise section : TEXT
        //
        $wp_customize->add_setting('text-callout-expertise-section'.$expertiseCreated[$i], array(
            'default' => 'Nog in te vullen'
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
        homepage-callout-expertise-section-text'.$expertiseCreated[$i], array(
            'label' => 'Description',
            'section' => 'homepage-expertise-callout-section'.$expertiseCreated[$i],
            'settings' => 'text-callout-expertise-section'.$expertiseCreated[$i],
            'type' => 'textarea'
        )));
        //
        // Expertise section : IMAGE
        //
        $wp_customize->add_setting('image-callout-expertise-section'.$expertiseCreated[$i]);

        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, '
        homepage-callout-expertise-section-image'.$expertiseCreated[$i], array(
            'label' => 'Image',
            'section' => 'homepage-expertise-callout-section'.$expertiseCreated[$i],
            'settings' => 'image-callout-expertise-section'.$expertiseCreated[$i],
            'width' =>550,
            'height' =>550
        )));
    }
}
add_action('customize_register','homepage_expertise_content_section'); 





function sidebar_menu() {

    $locations = array(
        'primary' => 'Sidebar Menu'
    );

    register_nav_menus($locations);
}

add_action('init', 'sidebar_menu'); 







