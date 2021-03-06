<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>
        <!-- Le Contenu de ma Page -->
        <div class="page">
            
            <p><strong><?php bloginfo( 'name'); ?></strong> | <?php bloginfo( 'description'); ?></p>

            <!-- TOP HEADER -->
            <div class="topheader">
                <p>Espace Clients : 
                    <a href="<?php echo wp_login_url(); ?>">Connexion</a> | 
                    <a href="<?php echo wp_registration_url(); ?>">Inscription</a>
                </p>
            </div>

            <!-- HEADER -->
            <header>
                <div class="logo">
                <?php
                    if( function_exists( 'the_custom_logo')){
                        if( has_custom_logo() ){
                            the_custom_logo();
                        }else {
                            echo '<img src="'.get_template_directory_uri().'/assets/img/logo.jpg">';
                        }
                    }
                ?>
                </div>
                <!-- nav>ul>li*3>a[href=#] -->
                <nav>
                <?php wp_nav_menu( array( 'theme_location' => 'csm-menu' ) ); ?>
                </nav>
            </header>
        </div> <!-- /.page -->
        <!-- PROJECTEUR -->
        <div id="projecteur">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/bandeau-saint-marc.jpg" 
                alt="Campus Saint-Marc">
        </div>