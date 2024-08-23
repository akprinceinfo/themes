<?php 

/*======
    This Template for displaying the Header

========*/

if (isset($_REQUEST['send'])) {
    $name = $_REQUEST['name'];
    $roll = $_REQUEST['roll'];

    echo $name . $roll;
}

?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js" >
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <!-- logo area  -->
    <div id="hrader_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- daynamick data -->
                    <a href=""><img src="<?php echo get_theme_mod('theme_logo'); ?>" alt="" srcset=""></a>
                    <!-- statect data  -->
                    <!-- <a href=""><img src="<?#php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="" srcset=""></a> -->
                </div>
                <div class="col-md-9"></div>
            </div>
        </div>
    </div>

   


    <?php wp_footer(); ?>
</body>
</html>