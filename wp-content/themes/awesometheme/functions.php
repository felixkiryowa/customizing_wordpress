<?php

    function awesome_script_enqueue(){
	    wp_enqueue_style('customstyle',get_template_directory_uri() . '/css/awesome.css',array(),'1.0.0','all');
	    wp_enqueue_script('customjs',get_template_directory_uri() . '/js/awesome.js',array(),'1.0.0',true);
    }

	add_action('wp_enqueue_scripts','awesome_script_enqueue');

    //activating hook team support
   function awesome_theme_setup(){
       add_theme_support('menus');
       //creating a custom menu
       register_nav_menu('primary','Primary Header Navigation');
       register_nav_menu('secondary','Footer Navigation');
   }

   //add action
   //OR
   //add_action('after_setup_theme','awesome_theme_setup');

   add_action('init','awesome_theme_setup');
?>