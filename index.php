<?php 

/*======
    This Template for displaying the Header

========*/



?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js" >
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    
    <div id="header_area" class="<?php echo get_theme_mod('theme_Menu_position'); ?>">
        <div class="container">
            <div class="row">
                <!-- logo area  -->
                <div class="col-md-3 logo">
                    <!-- daynamick data -->
                    <a href=""><img src="<?php echo get_theme_mod('theme_logo'); ?>" alt="" srcset=""></a>
                    <!-- statect data  -->
                    <!-- <a href=""><img src="<?#php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="" srcset=""></a> -->
                </div>
                <!-- nav area  -->
                <div class="col-md-9">
                    <!-- daynamick menu add -->
                    <?php wp_nav_menu( array('theme_location'=>'mani_menu','menu_id'=>'nav') ); ?>
                    
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
    </div>

    


    <?php wp_footer(); ?>
</body>
</html>