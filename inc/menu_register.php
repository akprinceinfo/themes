<?php

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
