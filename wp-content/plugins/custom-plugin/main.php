<?php
/**
 * Plugin Name: Quick Edit Fields 
 * Description: Plugin made for Disclose Agency website. Completly customizable.
 * Version: 1.0
 * Author: Ruben Rutjens 
 * 
 **/
add_action('wp_body_open', 'qef_head');

function get_website_name() {
    if(get_option('qef_field')) {
        return get_option('qef_field');
    } else {
        return 'Welcome to ' . get_bloginfo('name');
    }
}

function qef_head() {
    echo '<title>'.get_website_name() .'</title>';
}
add_action('wp_print_styles', 'qef_css');

function qef_css() {
    echo`
        <style>
            h3.qef {color: #fff; margin:0; 
                padding:30px;
                text-align:center;
                background:orange}
        </style>
    `;
}

 function qef_plugin_page() {
     $page_title = 'Quick Edit Fields - Options';
     $menu_title ='QEF';
     $capatibily = 'manage_options';
     $slug = 'qef-plugin';
     $callback = 'qef_page_html';
     $icon = 'dashicons-schedule';
     $position = 60;

     add_menu_page($page_title, $menu_title, $capatibily, $slug, $callback, $icon, $position);
 }

 add_action('admin_menu', 'qef_plugin_page');


 function qef_register_settings() {
     register_setting('qef_option_group', 'qef_field');
 }

 add_action('admin_init', 'qef_register_settings');


 function qef_page_html() {?>

    <div class="wrap qef-bar-wrapper">
    <form action="options.php" method="post">
        <?php settings_errors();?>
        <?php settings_fields('qef_option_group');?>
        <label for="qef_field_eat">Site Title: </label>
        <input name="qef_field" id="qef_field_eat" type="text" value="<?php echo get_option('qef_field'); ?>">
        <?php submit_button(); ?> 
    </form></div>

 <?php }