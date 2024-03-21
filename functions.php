


<?php
//load javascript files

function load_scripts() {




   //load the main.js file
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), [], '1.0', true);


    //load the style.css file
    wp_enqueue_style('main_style',get_theme_file_uri('/build/style-index.css')); 

    wp_enqueue_style('local-style',get_theme_file_uri('/build/index.css'));
    
    
    //load font awesome and social icons

// Load Font Awesome and Social Icons
wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');



}   


// Load Google Fonts

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');



//add a function to load the scripts
add_action('wp_enqueue_scripts', 'load_scripts');




//add a function to load the custom logo
function custom_theme_setup() {

    //add a title tag
    add_theme_support( 'title-tag' );

    //add a custom logo
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'custom_theme_setup' );