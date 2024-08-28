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
        
        
        <header id="header_area" class="<?php echo get_theme_mod('theme_Menu_position'); ?>">
            
        <header id="header_area">
            <div id="notice">
                <div class="row">
                    <div class="col-md-12">
                        <p>Some Nothification</p>
                    </div>
                </div>
            </div>
        </header>
        