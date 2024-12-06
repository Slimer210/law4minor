<?php
/**
 * Template Name: About Us
 * Description: A custom template for the About Us page.
 */
get_header(); ?>

<main id="lm-main">
        <div class="stg-container">
            <!-- Section: Page Title -->
            <section class="backlight-bottom">
                <div class="stg-row">
                    <div class="stg-col-6 stg-offset-3 align-center stg-tp-col-10 stg-tp-offset-1">
                        <h1 class="lm-page-title" data-appear="fade-up" data-unload="fade-up">About Us</h1>
                        <p class="lm-large-text" data-split-appear="fade-up" data-split-unload="fade-up" data-delay="100">We are a passionate team who empower young people to lead positive lives, educate communities to understand the challenges they face, and provide the support needed to prevent juvenile crime.</p>
                    </div>
                </div>
            </section>
            <?php 
                $about_us_img_url = get_template_directory_uri() . '/assets/img/about-1.webp';
            ?>
            <section class="divider-bottom">
                <div class="lm-parallax-media stg-bottom-gap-l is-init in-view" data-delay="200" data-unload="fade-up">
                    <div class="st-lazy-wrapper is-loaded stop-anim"><img src="<?php echo esc_url( $about_us_img_url ); ?>" data-src="<?php echo esc_url( $about_us_img_url ); ?>" alt="About Law4Minor" width="1920" height="960" style="transform-origin: 50% 50% 0px; transform: translateY(-60px) scale(1.1);"></div>
                </div>
                

                <div class="stg-row stg-large-gap stg-tp-normal-gap">
                    <div class="stg-col-6 stg-vertical-space-between stg-tp-bottom-gap-l" data-unload="fade-left">
                        <h2 data-split-appear="fade-up">Empowering Youth, Strengthening Communities.</h2>
                    </div>
                    <div class="stg-col-6" data-appear="fade-left" data-unload="fade-right" data-delay="100">
                        <p class="lm-large-text">Our mission is clear: <strong>empower young people to lead positive lives, educate communities to understand the challenges they face, and provide the support needed to prevent juvenile crime.</strong></p>
                        <p>At the heart of our work is a simple, powerful belief: every young person deserves the chance to grow up in an environment that nurtures their potential, encourages positive choices, and supports their well-being. In Malaysia, however, the rising rates of juvenile delinquency tell a different story. With thousands of crimes committed by minors each year, we are deeply concerned about the factors that contribute to these troubling trends. We are here to make a change.</p>
                        <p>Our organization is committed to tackling juvenile crime at its roots—through education, prevention, and community-driven solutions. We believe that by addressing the complex issues that lead to delinquency, we can empower youth to make better choices and create a future where crime is no longer a path many young people feel they must follow.</p>
                        <p>We take a proactive, holistic approach to solving the issue of youth crime. Rather than waiting for problems to escalate, we focus on early intervention—educating at-risk youth, their families, and communities to identify challenges before they lead to criminal behavior.</p>
                    </div>
                </div>
            </section>
            <!-- Section: Team -->
            <section class="divider-bottom">
                <div class="stg-row lm-section-title">
                    <div class="stg-col-8 stg-offset-2 stg-tp-col-10 stg-tp-offset-1">
                        <div class="align-center">
                            <h2 data-appear="fade-up" data-unload="fade-up">Meet the Team</h2>
                            <p class="lm-large-text" data-split-appear="fade-up" data-split-unload="fade-up" data-delay="100">
                            We are a dedicated group of professionals, each driven by a shared commitment to creating positive change. 
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Team Carousel -->
                <div class="swiper lm-carousel" data-appear="fade-up" data-delay="200" data-tp-centered="0" data-unload="fade-up">
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
                                <div class="lm-block lm-carousel-card swiper-slide">
                                    <div class="lm-carousel-card-image">
                                        <img class="lm-lazy" data-src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($name); ?>" width="600" height="900">
                                    </div>
                                    <div class="lm-carousel-card-footer">
                                        <div class="lm-carousel-card-title">
                                            <span class="lm-meta"><?php echo esc_html($role); ?></span>
                                            <h6><?php echo esc_html($name); ?></h6>
                                        </div>
                                        <span class="lm-icon lm-icon-explore"></span>
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
                    <div class="swiper-pagination lm-dots"></div>
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
                        <p class="lm-large-text" data-split-appear="fade-up" data-delay="100">We believe that lasting change starts with education and community involvement. Our programs and initiatives are designed to address the root causes of juvenile delinquency and provide the tools needed for young people to thrive.</p>
                    </div>
                </div>
                <!-- Services List -->
                <div class="lm-detailed-list-wrap" data-appear="fade-up" data-unload="fade-up">
                    <ul class="lm-detailed-list">
                        <li>
                            <div class="lm-detailed-list-title">
                                <h4>Youth-Focused Education<span class="lm-accent">.</span></h4>
                            </div>
                            <div class="lm-detailed-list-description">
                                <p>Our educational programs focus on building awareness, teaching life skills, and fostering resilience in youth. Through workshops, talks, and interactive sessions, we provide young people with the tools to navigate life's challenges without resorting to crime.</p>
                            </div>
                            <div class="lm-detailed-list-button">
                                <span class="lm-icon lm-icon-explore"></span>
                            </div>
                            <a href="service-details.html"></a>
                        </li>
                        <li>
                            <div class="lm-detailed-list-title">
                                <h4>Family and Community Support<span class="lm-accent">.</span></h4>
                            </div>
                            <div class="lm-detailed-list-description">
                                <p>We recognize the importance of a strong support system. Our programs extend to families and local communities, offering resources and guidance on how to create safe, nurturing environments for young people. We also collaborate with schools, community organizations, and local authorities to build a stronger, more cohesive community.</p>
                            </div>
                            <div class="lm-detailed-list-button">
                                <span class="lm-icon lm-icon-explore"></span>
                            </div>
                            <a href="service-details.html"></a>
                        </li>
                        <li>
                            <div class="lm-detailed-list-title">
                                <h4>Creative Outreach<span class="lm-accent">.</span></h4>
                            </div>
                            <div class="lm-detailed-list-description">
                                <p>Leveraging social media, podcasts, and other creative channels, we make valuable information accessible to a wide audience. By engaging young people where they are, we foster a conversation about making better choices, staying in school, and avoiding risky behaviors.</p>
                            </div>
                            <div class="lm-detailed-list-button">
                                <span class="lm-icon lm-icon-explore"></span>
                            </div>
                            <a href="service-details.html"></a>
                        </li>
                    </ul>
                </div><!-- .lm-detailed-list-wrap -->
                <div class="align-center stg-top-gap-l" data-appear="fade-up" data-unload="fade-up">
                    <a href="services.html" class="lm-button">Explore All Our Works</a>
                </div>
            </section>

            <!-- Section: Our Passion -->
            <section>
                <div class="align-center stg-bottom-gap-l">
                    <h2 data-split-appear="fade-up" data-unload="fade-up">Our Values</h2>
                    <p class="lm-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">We are driven by a set of core values that guide everything we do:</p>
                </div>

                <div class="lm-grid-2cols" data-stagger-appear="zoom-in" data-delay="150" data-unload="fade-up">
                    <!-- Icon Box Icon -->
                    <div class="lm-icon-box lm-block">
                        <h4>Integrity<span class="lm-accent">.</span></h4>
                        <p class="lm-large-text">We are committed to honest, transparent work that creates real change in the lives of young people.</p>
                        <div class="lm-box-icon">
                            <i class="lm-icon lm-icon-creativity"></i>
                        </div>
                    </div><!-- .lm-block -->
                    <!-- Icon Box Icon -->
                    <div class="lm-icon-box lm-block">
                        <h4>Collaboration<span class="lm-accent">.</span></h4>
                        <p class="lm-large-text">We believe in the power of partnerships, working together with schools, organizations, and public institutions to amplify our impact.</p>
                        <div class="lm-box-icon">
                            <i class="lm-icon lm-icon-collab"></i>
                        </div>
                    </div><!-- .lm-block -->
                    <!-- Icon Box Icon -->
                    <div class="lm-icon-box lm-block">
                        <h4>Hope<span class="lm-accent">.</span></h4>
                        <p class="lm-large-text">We are committed to giving young people the opportunity to envision and create a brighter future for themselves.</p>
                        <div class="lm-box-icon">
                            <i class="lm-icon lm-icon-impact"></i>
                        </div>
                    </div><!-- .lm-block -->
                    <!-- Icon Box Icon -->
                    <div class="lm-icon-box lm-block">
                        <h4>Empathy<span class="lm-accent">.</span></h4>
                        <p class="lm-large-text">We listen to the voices of youth, families, and communities to understand their unique challenges and needs.</p>
                        <div class="lm-box-icon">
                            <i class="lm-icon lm-icon-innovation"></i>
                        </div>
                    </div><!-- .lm-block -->
                </div><!-- .lm-grid -->
            </section>

            <!-- Section: Grid CTA -->
            <section class="backlight-top">
                <div class="lm-bento-grid lm-grid-cta">
                    <div class="is-large lm-masked-block" data-appear="fade-right" data-unload="fade-left">
                        <div class="lm-grid-cta-media lm-masked-media">
                            <div class="lm-grid-cta-heading">Join Us in Building a Better Future</div>
                        </div>
                        <div class="lm-masked-content at-bottom-right">
                            <p class="lm-large-text" data-appear="fade-right" data-delay="100">Get involved. Make a difference. &rarr;</p>
                        </div>
                    </div>
                    <div class="is-medium lm-block" data-appear="fade-down" data-unload="fade-right">
                        <p>As an organization, we are constantly evolving, learning, and adapting to meet the needs of the communities we serve. But we cannot do this alone. We invite individuals, schools, organizations, and government bodies to join us in this vital mission. Together, we can create a Malaysia where young people are supported, educated, and empowered to build a brighter future.</p>
                    </div>
                    <div class="is-small" data-appear="zoom-out" data-delay="100" data-unload="zoom-out">
                        <a href="contacts.html" class="lm-square-button">
                            <span class="lm-icon lm-icon-explore"></span>
                        </a>
                    </div>
                    
                </div>
            </section>

        </div><!-- .stg-container -->

<?php get_footer(); ?>