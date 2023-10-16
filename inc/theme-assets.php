<?php

/*
 *  ENQUEUE SCRIPTS MAGICSCAN
 */

function theme_enqueue_script() 
{
    // Initialize variables
    $script_handle = 'wp-script';
    // Register project js files
    $js_files = glob(THEME_DIR.'/magicscan/dist/assets/js/*.js');
    foreach ( $js_files as $file ) {
        $handle = $script_handle. '-' .basename($file, '.js');
		wp_register_script($handle, THEME_URL.'/magicscan/dist/assets/js/'.basename($file)."?".date('l jS \of F Y h:i:s A'), array('jquery'), false, true);
        wp_enqueue_script($handle);
    }
}
add_action('wp_enqueue_scripts', 'theme_enqueue_script');

/*
 *  ENQUEUE STYLES MAGICSCAN
 */

function theme_enqueue_styles()
{
    // Initialize variables
    $script_handle = 'wp-style';

    // Register main styles and other if defined
    $css_files = glob(THEME_DIR.'/magicscan/dist/assets/css/*.css');
    foreach ($css_files as $file) {
        $handle = $script_handle. '-' .basename($file, '.css');
        wp_register_style($handle, THEME_URL.'/magicscan/dist/assets/css/'.basename($file)."?".date('l jS \of F Y h:i:s A'), array(), false, false);
        wp_enqueue_style($handle);
    }
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


/*
 *  ENQUEUE SCRIPTS THEME
 */

 function theme_enqueue_script_theme() 
 {
     // Initialize variables
     $script_handle = 'wp-script';
     // Register project js files
     $js_files = glob(THEME_DIR.'/assets/js/*.js');
     foreach ( $js_files as $file ) {
         $handle = $script_handle. '-' .basename($file, '.js');
         wp_register_script($handle, THEME_URL.'/assets/js/'.basename($file)."?".date('l jS \of F Y h:i:s A'), array('jquery'), false, true);
         wp_enqueue_script($handle);
     }
 }
 add_action('wp_enqueue_scripts', 'theme_enqueue_script_theme');
 /*
  *  ENQUEUE STYLES THEME
  */
 function theme_enqueue_styles_theme()
 {
     // Initialize variables
     $script_handle = 'wp-style';
 
     // Register main styles and other if defined
     $css_files = glob(THEME_DIR.'/assets/css/*.css');
     foreach ($css_files as $file) {
         $handle = $script_handle. '-' .basename($file, '.css');
         wp_register_style($handle, THEME_URL.'/assets/css/'.basename($file)."?".date('l jS \of F Y h:i:s A'), array(), false, false);
         wp_enqueue_style($handle);
     }
 }
 add_action('wp_enqueue_scripts', 'theme_enqueue_styles_theme');
?>