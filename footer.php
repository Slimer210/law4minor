<footer id="bringer-footer" class="in-view" data-appear="fade-up" data-unload="fade-down">
    <div class="bringer-footer-widgets">
        <div class="stg-container">
            <div class="stg-row" data-stagger-appear="fade-left" data-stagger-delay="100">
                <div class="stg-col-5 stg-tp-col-12 stg-tp-bottom-gap-l">
                    <div class="bringer-info-widget">
                        <a href="<?php echo home_url(); ?>" class="bringer-logo footer-logo">
                            <?php
                            if ( function_exists( 'the_custom_logo' ) ) :
                                the_custom_logo();
                            else :
                                echo '<img src="' . esc_url( get_template_directory_uri() . '/img/logo.png' ) . '" alt="' . get_bloginfo( 'name' ) . '" width="32" height="32">';
                            endif;
                            ?>
                        </a>
                        <div class="bringer-info-description">
                            <?php bloginfo( 'description' ); ?>
                        </div>
                        <span class="bringer-label">Follow us:</span>
                        <ul class="bringer-socials-list" data-stagger-appear="fade-up" data-stagger-delay="75">
                            <?php
                            // List of social media platforms with their corresponding classes
                            $socials = array(
                                'instagram'  => 'bringer-socials-instagram',
                                'tiktok'     => 'bringer-socials-tiktok',
                                'facebook'   => 'bringer-socials-facebook',
                                'twitter'    => 'bringer-socials-x', // 'x' represents the new Twitter (formerly X)
                                'linkedin'   => 'bringer-socials-linkedin',
                                'youtube'    => 'bringer-socials-youtube',
                                'vimeo'      => 'bringer-socials-vimeo',
                                'behance'    => 'bringer-socials-behance',
                                'dribble'    => 'bringer-socials-dribble',
                                'pinterest'  => 'bringer-socials-pinterest',
                                'tumblr'     => 'bringer-socials-tumblr',
                                'flickr'     => 'bringer-socials-flickr',
                                'xing'       => 'bringer-socials-xing',
                                'patreon'    => 'bringer-socials-patreon',
                                '500px'      => 'bringer-socials-500px',
                            );

                            // Loop through each social media platform and check if it's enabled in the Customizer
                            foreach ( $socials as $social => $class ) {
                                // Get the URL and enabled state from the Customizer
                                $social_url = get_theme_mod( "bringer_social_{$social}_url" );
                                $social_enabled = get_theme_mod( "bringer_social_{$social}_enabled" );

                                // Only display the icon if the user has enabled it
                                if ( $social_enabled && ! empty( $social_url ) ) {
                                    echo '<li><a href="' . esc_url( $social_url ) . '" target="_blank" class="' . esc_attr( $class ) . '"><i></i></a></li>';
                                }
                            }
                            ?>
                        </ul>

                    </div>
                </div>

                <!-- Footer Widget 3: Resources -->
                <div class="stg-col-5 stg-tp-col-4 stg-m-col-4">
                    <div class="bringer-widget">
                        <h6>Resources</h6>
                        <div class="bringer-menu-widget">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'new_menu_location',  // Change this to the new menu location
                                'container' => false,
                                'menu_class' => '',
                                'items_wrap' => '<ul>%3$s</ul>',
                            ) );
                            ?>
                        </div>
                    </div><!-- .bringer-widget -->
                </div>
            </div><!-- .stg-row -->
        </div><!-- .stg-container -->
    </div><!-- .bringer-footer-widgets -->

    <!-- Footer Copyright Line -->
    <div class="bringer-footer-line stg-container">
        <div class="align-center">
            Copyright &copy; 2024-<?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.
        </div>
    </div><!-- .bringer-footer-line -->
</footer>

<?php wp_footer(); ?> <!-- This hook is necessary for loading footer scripts -->
</body>
</html>
