<?php

    include_once('inc/moderna-files.php');  

   
    function moderna_theme_menus(){
        register_nav_menus(array(
            'main_menu'=>'Main Menu'
        ));
        register_nav_menus(array(
            'Footer_menu'=>'Footer Menu'
        ));
    }
    add_action('init','moderna_theme_menus');

    function moderna_fallback_page(){
       
    }
?>