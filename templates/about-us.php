<?php
/**
 * Template Name: About Us
 * Description: A custom template for the About Us page.
 */
get_header(); ?>

<main id="bringer-main">
        <div class="stg-container">
            <!-- Section: Page Title -->
            <section class="backlight-bottom">
                <div class="stg-row">
                    <div class="stg-col-6 stg-offset-3 align-center stg-tp-col-10 stg-tp-offset-1">
                        <h1 class="bringer-page-title" data-appear="fade-up" data-unload="fade-up">About Us</h1>
                        <p class="bringer-large-text" data-split-appear="fade-up" data-split-unload="fade-up" data-delay="100">We are a passionate team who empower young people to lead positive lives, educate communities to understand the challenges they face, and provide the support needed to prevent juvenile crime.</p>
                    </div>
                </div>
            </section>
            <?php 
                $about_us_img_url = get_template_directory_uri() . '/assets/img/about-1.webp';
            ?>
            <section class="divider-bottom">
                <div class="bringer-parallax-media stg-bottom-gap-l is-init in-view" data-delay="200" data-unload="fade-up">
                    <div class="st-lazy-wrapper is-loaded stop-anim"><img src="<?php echo esc_url( $about_us_img_url ); ?>" data-src="<?php echo esc_url( $about_us_img_url ); ?>" alt="About Law4Minor" width="1920" height="960" style="transform-origin: 50% 50% 0px; transform: translateY(-60px) scale(1.1);"></div>
                </div>
                

                <div class="stg-row stg-large-gap stg-tp-normal-gap">
                    <div class="stg-col-6 stg-vertical-space-between stg-tp-bottom-gap-l" data-unload="fade-left">
                        <h2 data-split-appear="fade-up">Empowering Youth, Strengthening Communities.</h2>
                    </div>
                    <div class="stg-col-6" data-appear="fade-left" data-unload="fade-right" data-delay="100">
                        <p class="bringer-large-text">Our mission is clear: <strong>empower young people to lead positive lives, educate communities to understand the challenges they face, and provide the support needed to prevent juvenile crime.</strong></p>
                        <p>At the heart of our work is a simple, powerful belief: every young person deserves the chance to grow up in an environment that nurtures their potential, encourages positive choices, and supports their well-being. In Malaysia, however, the rising rates of juvenile delinquency tell a different story. With thousands of crimes committed by minors each year, we are deeply concerned about the factors that contribute to these troubling trends. We are here to make a change.</p>
                        <p>Our organization is committed to tackling juvenile crime at its roots—through education, prevention, and community-driven solutions. We believe that by addressing the complex issues that lead to delinquency, we can empower youth to make better choices and create a future where crime is no longer a path many young people feel they must follow.</p>
                        <p>We take a proactive, holistic approach to solving the issue of youth crime. Rather than waiting for problems to escalate, we focus on early intervention—educating at-risk youth, their families, and communities to identify challenges before they lead to criminal behavior.</p>
                    </div>
                </div>
            </section>
            <!-- Section: Team -->
            <section class="divider-bottom">
                <div class="stg-row bringer-section-title">
                    <div class="stg-col-8 stg-offset-2 stg-tp-col-10 stg-tp-offset-1">
                        <div class="align-center">
                            <h2 data-appear="fade-up" data-unload="fade-up">Meet the Team</h2>
                            <p class="bringer-large-text" data-split-appear="fade-up" data-split-unload="fade-up" data-delay="100">
                            We are a dedicated group of professionals, each driven by a shared commitment to creating positive change. 
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Team Carousel -->
                <div class="swiper bringer-carousel" data-appear="fade-up" data-delay="200" data-tp-centered="0" data-unload="fade-up">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'team-member',
                            'posts_per_page' => -1,
                        );
                        $carousel_query = new WP_Query($args);

                        if ($carousel_query->have_posts()) :
                            while ($carousel_query->have_posts()) : $carousel_query->the_post();
                                // Get post details
                                $name = get_post_meta(get_the_ID(), 'name', true);
                                $role = get_post_meta(get_the_ID(), 'role', true);
                                $image_url = wp_get_attachment_url(get_post_meta(get_the_ID(), 'image', true));
                                ?> 
                                <div class="bringer-block bringer-carousel-card swiper-slide">
                                    <div class="bringer-carousel-card-image">
                                        <img class="bringer-lazy" data-src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($name); ?>" width="600" height="900">
                                    </div>
                                    <div class="bringer-carousel-card-footer">
                                        <div class="bringer-carousel-card-title">
                                            <span class="bringer-meta"><?php echo esc_html($role); ?></span>
                                            <h6><?php echo esc_html($name); ?></h6>
                                        </div>
                                        <span class="bringer-icon bringer-icon-explore"></span>
                                    </div>
                                    <a href="<?php the_permalink(); ?>"></a>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo '<p>No team members found.</p>';
                        endif;
                        ?>
                    </div>
                    <div class="swiper-pagination bringer-dots"></div>
                </div>
            </section>

            <!-- Section: Services -->
            <section class="backlight-bottom">
                <!-- Section Intro -->
                <div class="stg-row stg-bottom-gap-l">
                    <div class="stg-col-6 stg-tp-col-8 stg-tp-bottom-gap-l" data-unload="fade-left">
                        <h2 data-split-appear="fade-up">What We Do</h2>
                    </div>
                    <div class="stg-col-6 stg-tp-col-9 stg-tp-offset-3" data-unload="fade-right">
                        <p class="bringer-large-text" data-split-appear="fade-up" data-delay="100">We believe that lasting change starts with education and community involvement. Our programs and initiatives are designed to address the root causes of juvenile delinquency and provide the tools needed for young people to thrive.</p>
                    </div>
                </div>
                <!-- Services List -->
                <div class="bringer-detailed-list-wrap" data-appear="fade-up" data-unload="fade-up">
                    <ul class="bringer-detailed-list">
                        <li>
                            <div class="bringer-detailed-list-title">
                                <h4>Youth-Focused Education<span class="bringer-accent">.</span></h4>
                            </div>
                            <div class="bringer-detailed-list-description">
                                <p>Our educational programs focus on building awareness, teaching life skills, and fostering resilience in youth. Through workshops, talks, and interactive sessions, we provide young people with the tools to navigate life's challenges without resorting to crime.</p>
                            </div>
                            <div class="bringer-detailed-list-button">
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="service-details.html"></a>
                        </li>
                        <li>
                            <div class="bringer-detailed-list-title">
                                <h4>Family and Community Support<span class="bringer-accent">.</span></h4>
                            </div>
                            <div class="bringer-detailed-list-description">
                                <p>We recognize the importance of a strong support system. Our programs extend to families and local communities, offering resources and guidance on how to create safe, nurturing environments for young people. We also collaborate with schools, community organizations, and local authorities to build a stronger, more cohesive community.</p>
                            </div>
                            <div class="bringer-detailed-list-button">
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="service-details.html"></a>
                        </li>
                        <li>
                            <div class="bringer-detailed-list-title">
                                <h4>Creative Outreach<span class="bringer-accent">.</span></h4>
                            </div>
                            <div class="bringer-detailed-list-description">
                                <p>Leveraging social media, podcasts, and other creative channels, we make valuable information accessible to a wide audience. By engaging young people where they are, we foster a conversation about making better choices, staying in school, and avoiding risky behaviors.</p>
                            </div>
                            <div class="bringer-detailed-list-button">
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="service-details.html"></a>
                        </li>
                    </ul>
                </div><!-- .bringer-detailed-list-wrap -->
                <div class="align-center stg-top-gap-l" data-appear="fade-up" data-unload="fade-up">
                    <a href="services.html" class="bringer-button">Explore All Our Works</a>
                </div>
            </section>

            <!-- Section: Our Passion -->
            <section>
                <div class="align-center stg-bottom-gap-l">
                    <h2 data-split-appear="fade-up" data-unload="fade-up">Our Values</h2>
                    <p class="bringer-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">We are driven by a set of core values that guide everything we do:</p>
                </div>

                <div class="bringer-grid-2cols" data-stagger-appear="zoom-in" data-delay="150" data-unload="fade-up">
                    <!-- Icon Box Icon -->
                    <div class="bringer-icon-box bringer-block">
                        <h4>Integrity<span class="bringer-accent">.</span></h4>
                        <p class="bringer-large-text">We are committed to honest, transparent work that creates real change in the lives of young people.</p>
                        <div class="bringer-box-icon">
                            <i class="bringer-icon bringer-icon-creativity"></i>
                        </div>
                    </div><!-- .bringer-block -->
                    <!-- Icon Box Icon -->
                    <div class="bringer-icon-box bringer-block">
                        <h4>Collaboration<span class="bringer-accent">.</span></h4>
                        <p class="bringer-large-text">We believe in the power of partnerships, working together with schools, organizations, and public institutions to amplify our impact.</p>
                        <div class="bringer-box-icon">
                            <i class="bringer-icon bringer-icon-collab"></i>
                        </div>
                    </div><!-- .bringer-block -->
                    <!-- Icon Box Icon -->
                    <div class="bringer-icon-box bringer-block">
                        <h4>Hope<span class="bringer-accent">.</span></h4>
                        <p class="bringer-large-text">We are committed to giving young people the opportunity to envision and create a brighter future for themselves.</p>
                        <div class="bringer-box-icon">
                            <i class="bringer-icon bringer-icon-impact"></i>
                        </div>
                    </div><!-- .bringer-block -->
                    <!-- Icon Box Icon -->
                    <div class="bringer-icon-box bringer-block">
                        <h4>Empathy<span class="bringer-accent">.</span></h4>
                        <p class="bringer-large-text">We listen to the voices of youth, families, and communities to understand their unique challenges and needs.</p>
                        <div class="bringer-box-icon">
                            <i class="bringer-icon bringer-icon-innovation"></i>
                        </div>
                    </div><!-- .bringer-block -->
                </div><!-- .bringer-grid -->
            </section>

            <!-- Section: Grid CTA -->
            <section class="backlight-top">
                <div class="bringer-bento-grid bringer-grid-cta">
                    <div class="is-large bringer-masked-block" data-appear="fade-right" data-unload="fade-left">
                        <div class="bringer-grid-cta-media bringer-masked-media">
                            <div class="bringer-grid-cta-heading">Join Us in Building a Better Future</div>
                        </div>
                        <div class="bringer-masked-content at-bottom-right">
                            <p class="bringer-large-text" data-appear="fade-right" data-delay="100">Get involved. Make a difference. &rarr;</p>
                        </div>
                    </div>
                    <div class="is-medium bringer-block" data-appear="fade-down" data-unload="fade-right">
                        <p>As an organization, we are constantly evolving, learning, and adapting to meet the needs of the communities we serve. But we cannot do this alone. We invite individuals, schools, organizations, and government bodies to join us in this vital mission. Together, we can create a Malaysia where young people are supported, educated, and empowered to build a brighter future.</p>
                    </div>
                    <div class="is-small" data-appear="zoom-out" data-delay="100" data-unload="zoom-out">
                        <a href="contacts.html" class="bringer-square-button">
                            <span class="bringer-icon bringer-icon-explore"></span>
                        </a>
                    </div>
                    
                </div>
            </section>

        </div><!-- .stg-container -->

<?php get_footer(); ?>