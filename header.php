<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Addressing the rise of juvenile delinquency in Malaysia. Our initiative focuses on empowering youth, educating families, and preventing juvenile crime through community outreach, school programs, and partnerships with legal and educational institutions. Join us in creating a safer, more supportive environment for all.">
    <meta name="keywords" content="juvenile delinquency, Malaysia, youth crime, prevention, education, mental health, community outreach, school programs, youth empowerment, Law4Minor, UN SDG 16, peace and justice, crime prevention, family support">
    <meta name="author" content="Law4Minor">
    <meta property="og:title" content="Law4Minor - Addressing Juvenile Delinquency in Malaysia">
    <meta property="og:description" content="Join our mission to tackle the rise of juvenile delinquency in Malaysia. We provide education, resources, and support to empower youth, families, and communities to prevent crime.">
    <meta property="og:url" content="https://www.law4minor.com">
    <meta name="robots" content="index, follow">


    <!-- Page Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
    
    <?php wp_head(); ?>

    <?php if ( function_exists( 'the_custom_logo' ) ) : ?>
        <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.png' ); ?>" sizes="32x32">
    <?php endif; ?>
</head>
<body <?php body_class(); ?>>
    <!-- Header -->
    <header id="bringer-header" class="is-frosted is-sticky" data-appear="fade-down" data-unload="fade-up">
        <!-- Desktop Header -->
        <div class="bringer-header-inner">
            <div class="bringer-header-lp stg-large-gap">
                <a href="<?php echo home_url(); ?>" class="bringer-logo stg-row stg-gap-5">
                    <?php 
                    // Display custom logo if set
                    if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :
                        the_custom_logo();
                    else :
                        // Fallback logo if no custom logo is set
                        echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/img/logo.png' ) . '" alt="' . get_bloginfo( 'name' ) . '" width="32" height="32">';
                    endif;
                    ?>
                </a>
                
            </div>
            <!-- Main Menu -->
            <div class="bringer-header-mp">
                <nav class="bringer-nav">
                    <?php
                    // Display the primary menu with the custom walker
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'      => 'main-menu',
                        'container'       => false,
                        'walker'           => new WP_Bringer_Nav_Walker(),
                    ) );
                    ?>
                </nav>
            </div>
        </div>
        <!-- Mobile Header -->
        <div class="bringer-mobile-header-inner">
            <a href="<?php echo home_url(); ?>" class="bringer-logo">
                <?php 
                if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :
                    the_custom_logo();
                else :
                    echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/img/logo.png' ) . '" alt="' . get_bloginfo( 'name' ) . '" width="32" height="32">';
                endif;
                ?>
            </a>
            <a href="#" class="bringer-mobile-menu-toggler">
                <i class="bringer-menu-toggler-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </i>
            </a>
        </div>
    </header>
