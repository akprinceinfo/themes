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

//Pagenav Function

function theme_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages = "";
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1 ;
    $args['base'] = str_replace(999999999,'%#%',get_pagenum_link(999999999));
    $args['tatal'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if ($max > 1) echo '</pre>
        <div class="wp_pagenav">';
        if ($total == 1 && $max > 1) $pages = '<p class="pages"> Page '. $current . '<span> of </span>' . $max .'</p>';
        echo $pages . paginate_links($args);
        if($max > 1) echo '</div> <pre>' ;

}