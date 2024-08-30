<?php

//Theme Title add
add_theme_support('title-tag');


// Thumbnail Image Are
add_theme_support('post-thumbnails',array('page','post'));
add_image_size('post-thumbnails',970,350,true);


// Except to 40 Words

function theme_excerpt_more($more){
    return '</br> <a href="'.get_permalink().'">'.'Read More'.'</a>';
}
add_filter('excerpt_more','theme_excerpt_more');

// excerpt_lemgth 

function theme_excerpt_lemgth($length){
    return 45;
}
add_filter('excerpt_length','theme_excerpt_lemgth',999);