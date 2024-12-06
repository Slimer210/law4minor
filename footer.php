<footer id="lm-footer" class="in-view" data-appear="fade-up" data-unload="fade-down">
    <div class="lm-footer-widgets">
        <div class="stg-container">
            <div class="stg-row" data-stagger-appear="fade-left" data-stagger-delay="100">
                <div class="stg-col-5 stg-tp-col-12 stg-tp-bottom-gap-l">
                    <div class="lm-info-widget">
                        <a href="<?php echo home_url(); ?>" class="lm-logo footer-logo">
                            <?php
                            if ( function_exists( 'the_custom_logo' ) ) :
                                the_custom_logo();
                            else :
                                echo '<img src="' . esc_url( get_template_directory_uri() . '/img/logo.png' ) . '" alt="' . get_bloginfo( 'name' ) . '" width="32" height="32">';
                            endif;
                            ?>
                        </a>
                        <div class="lm-info-description">
                            <?php bloginfo( 'description' ); ?>
                        </div>
                        <span class="lm-label">Follow us:</span>
                        <ul class="lm-socials-list" data-stagger-appear="fade-up" data-stagger-delay="75">
                            <?php
                            // List of social media platforms with their corresponding classes
                            $socials = array(
                                'instagram'  => 'lm-socials-instagram',
                                'tiktok'     => 'lm-socials-tiktok',
                                'facebook'   => 'lm-socials-facebook',
                                'twitter'    => 'lm-socials-x', // 'x' represents the new Twitter (formerly X)
                                'linkedin'   => 'lm-socials-linkedin',
                                'youtube'    => 'lm-socials-youtube',
                                'vimeo'      => 'lm-socials-vimeo',
                                'behance'    => 'lm-socials-behance',
                                'dribble'    => 'lm-socials-dribble',
                                'pinterest'  => 'lm-socials-pinterest',
                                'tumblr'     => 'lm-socials-tumblr',
                                'flickr'     => 'lm-socials-flickr',
                                'xing'       => 'lm-socials-xing',
                                'patreon'    => 'lm-socials-patreon',
                                '500px'      => 'lm-socials-500px',
                            );

                            // Loop through each social media platform and check if it's enabled in the Customizer
                            foreach ( $socials as $social => $class ) {
                                // Get the URL and enabled state from the Customizer
                                $social_url = get_theme_mod( "lm_social_{$social}_url" );
                                $social_enabled = get_theme_mod( "lm_social_{$social}_enabled" );

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
                    <div class="lm-widget">
                        <h6>Resources</h6>
                        <div class="lm-menu-widget">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'new_menu_location',  // Change this to the new menu location
                                'container' => false,
                                'menu_class' => '',
                                'items_wrap' => '<ul>%3$s</ul>',
                            ) );
                            ?>
                        </div>
                    </div><!-- .lm-widget -->
                </div>
            </div><!-- .stg-row -->
        </div><!-- .stg-container -->
    </div><!-- .lm-footer-widgets -->

    <!-- Footer Copyright Line -->
    <div class="lm-footer-line stg-container">
        <div class="align-center">
            Copyright &copy; 2024-<?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.
        </div>
    </div><!-- .lm-footer-line -->
</footer>

<?php wp_footer(); ?> <!-- This hook is necessary for loading footer scripts -->
</body>
</html>
