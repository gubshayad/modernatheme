<?php

    include_once('inc/moderna-files.php');  

    include_once('inc/theme-menus.php');

    //About the theme supports

    include_once('inc/default-supports.php');
   
    // function moderna_theme_menus(){
    //     register_nav_menus(array(
    //         'main_menu'=>'Main Menu'
    //     ));
    // }
    // add_action('init','moderna_theme_menus');

    include_once('inc/coustom-post.php');

    include_once('inc/theme-widgets.php');
    
    //About the read more 

    include_once('inc/moderna-readmore.php'); 
    
    //About the shortcode
    
    include_once('inc/shortcode.php');

    //About the mce button

    include_once('inc/wp_mce_button.php');

 //About the theme option
 include_once('inc/theme-options.php');

/**

*Required: set ‘ot_theme_mode’ filter to true.
*/
add_filter( 'ot_theme_mode', '__return_true' );
/**
* Required: include OptionTree.
*/
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
?>