<?php


 // Logo Add
 function theme_cusomizer_regester($wp_customize){
    // Header area function
    $wp_customize->add_section('theme_header_area',array(
        'title' => __('Header Area','themeTextDomain'),
        'description'=> 'If you interested to update your header area, You can do it hear',
    ));
    $wp_customize->add_setting('theme_logo',array(
        'default' => get_bloginfo('template_directory').'img/logo.jpg',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'theme_logo',array(
        'lable'=> 'Logo Upload',
        'setting' => 'theme_logo',
        'section' => 'theme_header_area',
    )));

    

    // Menu Position Option 
    $wp_customize->add_section('theme_menu_option',array(
        'title' => __('Menu Position Option','themeTextDomain'),
        'description' => 'If You Intersted to change your menu position you can do it+',
    ));

    $wp_customize->add_setting('theme_Menu_position',array(
        'default'=>'right_menu',
    ));

    $wp_customize->add_control('theme_Menu_position',array(
        'label' => 'menu Position',
        'description' => 'Select Your Menu Position',
        'setting' => 'theme_Menu_position',
        'section' => 'theme_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu'
        ),
    ));




    // ================ CopyRight Option Start ===================

    $wp_customize->add_section('theme_footer_copy_add',array(
        'title' => __('Footer CopyRight Option','themeTextDomain'),
        'description'=> 'If you interested to footer Copy Right Option, You can do it hear',
    ));

    $wp_customize->add_setting('theme_footer_copy_setting',array(
        'default'=>'&copy; copyright 2024 | NextSolutionsIt',
    ));
    $wp_customize->add_control('theme_footer_copy_setting',array(
        'label' => ' Copyright Text',
        'setting' => 'theme_footer_copy_setting',
        'section' => 'theme_footer_copy_add',
    ));
    
    // ==================CopyRight Option End==================


}
add_action('customize_register','theme_cusomizer_regester');
