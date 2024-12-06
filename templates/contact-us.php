<?php
/**
 * Template Name: Contact Us
 * Description: A custom template for the About Us page.
 */
get_header(); ?>

<main id="lm-main">
        <div class="stg-container">
            <section class="backlight-bottom">
                <div class="stg-row stg-bottom-gap-l">
                    <div class="stg-col-6 stg-offset-3 align-center">
                        <h1 class="lm-page-title" data-appear="fade-up" data-unload="fade-up">Get in Touch</h1>
                        <p class="lm-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">We help teens reach their goals and believe every idea, no matter how big or small, should get the attention it deserves.</p>
                    </div>
                </div>
                <div class="lm-parallax-media" data-parallax-speed="20" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                    <img class="lm-lazy" src="img/null.png" data-src="img/inner-pages/contacts01.jpg" alt="Get in Touch" width="1920" height="960">
                </div>
            </section>

            <section class="backlight-top divider-bottom">
                <div class="stg-row lm-section-title">
                    <div class="stg-col-8 stg-offset-2">
                        <div class="align-center">
                            <h2 data-appear="fade-up" data-unload="fade-up">Let's 🗣 talk!</h2>
                            <p class="lm-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">Here's how you can connect with us:</p>
                        </div>
                    </div>
                </div>
                <div class="stg-row" data-stagger-appear="fade-up" data-delay="200" data-stagger-unload="fade-up">
                    <div class="stg-col-6 stg-tp-col-12 stg-tp-bottom-gap">
                        <div class="lm-block stg-aspect-square stg-vertical-space-between">
                            <a href="mailto:lm@example.com" class="lm-grid-item-link"></a>
                            <div>
                                <h5>Email<span class="lm-accent">.</span></h5>
                                <h6>law4minor@gmail.com</h6>
                            </div>
                            <p>Send us a detailed message. We'll get back to you as soon as possible to.</p>
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-12">
                        <div class="lm-block stg-aspect-square stg-tp-aspect-rectangle stg-vertical-space-between">
                        <div>
                            <h5>Social Media<span class="lm-accent">.</span></h5>
                            <ul class="lm-socials-list stg-small-gap" data-stagger-appear="fade-up" data-stagger-delay="75">
                                <?php
                                $socials = array(
                                    'instagram' => 'Instagram',
                                    'tiktok'    => 'TikTok',
                                    'facebook'  => 'Facebook',
                                    'twitter'   => 'X (Twitter)',
                                    'linkedin'  => 'LinkedIn',
                                    'youtube'   => 'YouTube',
                                    'vimeo'     => 'Vimeo',
                                    'behance'   => 'Behance',
                                    'dribble'   => 'Dribbble',
                                    'pinterest' => 'Pinterest',
                                    'tumblr'    => 'Tumblr',
                                    'flickr'    => 'Flickr',
                                    'xing'      => 'Xing',
                                    'patreon'   => 'Patreon',
                                    '500px'     => '500px'
                                );
                                foreach ( $socials as $social => $name ) {
                                    $url = get_theme_mod( "lm_social_{$social}_url" );
                                    $enabled = get_theme_mod( "lm_social_{$social}_enabled" );
                                    if ( $enabled && ! empty( $url ) ) :
                                ?>
                                        <li>
                                            <a href="<?php echo esc_url( $url ); ?>" target="_blank" class="lm-socials-<?php echo esc_attr( $social ); ?>">
                                                <i></i>
                                            </a>
                                        </li>
                                <?php
                                    endif;
                                }
                                ?>
                            </ul>
                        </div>
                            <p>Follow us on Social Media Platforms for a glimpse into our world, efforts, and projects.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="backlight-top is-fullwidth">
                <div class="stg-row stg-valign-middle stg-cta-with-image stg-tp-column-reverse">
                    <div class="stg-col-5" data-unload="fade-left">
                        <div class="lm-offset-image" data-bg-src="img/cta/contact-section-bg.jpg" data-appear="fade-up" data-threshold="0.25"></div>
                        <form action="/mail.php" method="post" class="lm-contact-form lm-block" data-fill-error="Please, fill out the contact form." data-appear="fade-right" data-threshold="0.25">
                            <div class="lm-form-content">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name" placeholder="Your Name" required>
                                <label for="email">Your Email</label>
                                <input type="email" id="email" name="email" placeholder="email@example.com" required>    
                                <label for="message">Your Message</label>
                                <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                                <button type="submit" value="Send Message">Contact Us</button>
                                <div class="lm-contact-form__response"></div>
                            </div>
                            <span class="lm-form-spinner"></span>
                        </form>
                    </div>
                    <div class="stg-col-6 stg-offset-1" data-unload="fade-right">
                        <div class="lm-cta-form-content">
                            <div class="lm-cta-form-title" data-split-appear="fade-up" data-split-delay="100" data-split-by="line">
                                Let's solve your enquiries.
                            </div>
                            <div class="lm-cta-text">
                                <div class="stg-row stg-valign-middle">
                                    <div class="stg-col-2 stg-offset-2 stg-tp-col-1 stg-tp-offset-3 stg-m-col-1 stg-m-offset-2" data-appear="fade-right">
                                        <i class="lm-cta-icon"></i>
                                    </div>
                                    <div class="stg-col-8 stg-tp-col-7 stg-m-col-8 stg-m-offset-1" data-appear="fade-left">
                                        <p class="lm-large-text">We help teens reach their goals and believe every idea, no matter how big or small, should get the attention it deserves.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
	</main>

<?php get_footer(); ?>