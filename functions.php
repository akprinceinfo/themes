<?php 

    /*================
        My Theme Function
    ===============*/

    //Theme Title add
    add_theme_support('title-tag');

    //Theme Css and jQuery File calling

    function themes_css_js_calling(){
        wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css', array(),'v5.0.2');
        wp_register_style('custom',get_template_directory_uri().'/css/custom.css', array(),'1.0.0','all');
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('custom');

        // jQuery Add 
        wp_enqueue_script('jQuery');
        wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.bundle.min.js',array(),'v5.0.2','true');
        wp_enqueue_script('main_js',get_template_directory_uri().'/js/main.js',array(),'1.0.0','true');

    }
    add_action("wp_enqueue_scripts","themes_css_js_calling");

    // Google Font Enqueue
    function theme_fontsAdd(){
        wp_enqueue_style('theme_google_fonts','https://fonts.googleapis.com/css2?family=Kaisei+Decol:wght@400;500;700&display=swap',false);
    }
    add_action("wp_enqueue_scripts","theme_fontsAdd");


    // Theme Function 


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
        
        // ================== CopyRight Option End==================


    }
    add_action('customize_register','theme_cusomizer_regester');


    // Menu Register
    register_nav_menu('mani_menu',__('Main Menu','themeTextDomain'));
  


    // header nav text color change 

    function theme_header_nav_color($wp_customize){
        $wp_customize->add_section('theme_color_add',array(
            'title' => __('Menu Color Option','themeTextDomain'),
            'description'=> 'If you interested to update your color Name, You can do it hear',
        ));

        $wp_customize->add_setting('theme_color_setting',array(
            'default'=>'blackColor',
        ));
        $wp_customize->add_control('theme_color_setting',array(
            'label' => 'Menu Color',
            'setting' => 'theme_color_setting',
            'section' => 'theme_color_add',
            'type' => 'radio',
            'choices' => array(
                'blackColor' => 'Default Color',
                'redColor' => 'Red Color',
                'yellowColor' => 'Yellow Color',
                
            ),
        ));
    }

    add_action('customize_register','theme_header_nav_color');

    //Walker Menu properties

    // function theme_nav_description($item_output,$item,$args){
    //     if( !empty ($item->description)){
    //         $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
    //       }
    //       return $item_output;
        
    // }
    // add_filter( 'walker_nav_menu_start_el','theme_nav_description',10,3);


   