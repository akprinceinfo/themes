<?php
    get_header( );
?>
    
    <header id="header_area" class="<?php echo get_theme_mod('theme_Menu_position'); ?>">
    <div class="container">
            <div class="row">
                <!-- logo area  -->
                <div class="col-md-3 logo">
                    <!-- daynamick data -->
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('theme_logo'); ?>" alt="" srcset=""></a>
                    <!-- statect data  -->
                    <!-- <a href=""><img src="<?#php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="" srcset=""></a> -->
                </div>
                <!-- nav area  -->
                <div class="col-md-9 <?php echo get_theme_mod('theme_color_setting'); ?>">
                    <!-- daynamick menu add -->
                    <?php wp_nav_menu(array('theme_location'=>'mani_menu','menu_id'=>'nav') ); ?>
                    
                    <!-- <ul id="nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Setvice</a>
                            <ul>
                                <li><a href="#">Setvice 1</a></li>
                                <li><a href="#">Setvice 2</a></li>
                                <li><a href="#">Setvice 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </header>

    <!-- =======================================
          -----  Body Area -----
    ======================================== -->

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    
     <?php get_footer(); ?>