<?php
// The content template (this is a simple example)
?>

<main id="bringer-main">
        <div class="stg-container">
            <!-- Hero Section -->
            <section class="backlight-bottom">
                <div class="bringer-hero-block bringer-hero-type07">
                    <!-- Media -->
                    <div class="bringer-hero-media-wrap">
                        <div class="bringer-parallax-media" data-appear="fade-down" data-unload="fade-up">
                            <?php
                            $hero_image_url = get_template_directory_uri() . '/assets/img/home-1.webp'; // Default image fallback
                            ?>
                            <img class="bringer-lazy" data-src="<?php echo esc_url( $hero_image_url ); ?>" alt="Hero Image" width="1920" height="960" loading="lazy">
                        </div>
                    </div>
                    
                    <!-- Info Line -->
                    <div class="bringer-hero-info-line" data-stagger-appear="fade-down" data-stagger-delay="100" data-delay="100" data-unload="fade-up">
                    </div><!-- .bringer-hero-info-line -->

                    <!-- Title and Additional -->
                    <div class="stg-row">
                        <div class="stg-col-6 stg-tp-col-6 stg-m-col-10 stg-m-offset-1 stg-m-bottom-gap" data-unload="fade-left">
                            <h1 class="bringer-page-title m-align-center" data-split-appear="fade-left">Why We Care: Addressing the Rise of Juvenile Delinquency</h1>
                        </div>
                        <div class="stg-col-6 stg-tp-col-6" data-unload="fade-right">
                            <div class="align-right stg-bottom-gap-l stg-tp-bottom-gap-none m-align-center" data-appear="fade-down">
                                <p class="bringer-large-text">In Malaysia, juvenile crime is on the rise, with over 5,000 offences committed by minors under 18 annually. The latest figures from the Department of Statistics reveal troubling trends in youth crime, highlighting a need for urgent action to address underlying causes. Our initiative focuses on understanding and tackling these root issues—whether they stem from a lack of positive role models, mental health challenges, or environmental influences—through education, awareness, and support.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- .bringer-hero-block -->
            </section>

            <!-- Section: About -->
            <section>
                <div class="stg-row stg-large-gap stg-m-normal-gap">
                <div class="stg-col-6 stg-tp-bottom-gap-l stg-m-bottom-gap" data-appear="fade-right" data-unload="fade-left">
                    <div class="bringer-parallax-media">
                        <?php
                        $about_image_url = get_template_directory_uri() . '/assets/img/home-2.webp';
                        ?>
                        <img class="bringer-lazy" data-src="<?php echo esc_url( $about_image_url ); ?>" alt="About Us" width="960" height="960" loading="lazy">
                    </div>
                </div>
                    <div class="stg-col-6 stg-vertical-space-between" data-appear="fade-left" data-unload="fade-right">
                        <div>
                            <h3>Our Mission: Empower, Educate, and Prevent.</h3>
                            <p class="bringer-large-text">We believe in prevention through education. By equipping young people, families, and communities with the knowledge and resources to recognize early warning signs and understand the complexities of juvenile crime, we aim to create a safer, more supportive environment for all.</p>
                        </div>
                        <a href="about-us" class="bringer-icon-link" data-appear="zoom-in">
                            <div class="bringer-icon-wrap">
                                <i class="bringer-icon bringer-icon-explore"></i>
                            </div>
                            <div class="bringer-icon-link-content">
                                <h6>
                                    Learn More About Us
                                </h6>
                            </div>
                        </a><!-- .bringer-icon-link -->
                    </div>
                </div><!-- .stg-row -->
            </section>

            <!-- Section: Services -->
            <!-- Section: Our Services -->
            <section class="backlight-top">
                <!-- Section Title -->
                <div class="stg-row bringer-section-title">
                    <div class="stg-col-8 stg-offset-2">
                        <div class="align-center">
                            <h2 data-appear="fade-up" data-unload="fade-up">Our Programs & Resources</h2>
                            <p class="bringer-large-text" data-appear="fade-up" data-unload="fade-up" data-delay="100">We offer a wide range of creative services to help businesses of all sizes achieve their goals. Our services include:</p>
                        </div>
                    </div>
                </div>
                <!-- Services List -->
                <div class="bringer-detailed-list-wrap" data-appear="fade-up" data-unload="fade-up" data-delay="200" data-threshold="0">
                    <ul class="bringer-detailed-list">
                        <li>
                            <div class="bringer-detailed-list-title">
                                <h4>Online Engagement<span class="bringer-accent">.</span></h4>
                            </div>
                            <div class="bringer-detailed-list-description">
                                <p>Through engaging, informative reels on social media, free consultations, and an upcoming podcast, we aim to make valuable information accessible to youth and their families.</p>
                            </div>
                            <div class="bringer-detailed-list-button">
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="service-details.html"></a>
                        </li>
                        <li>
                            <div class="bringer-detailed-list-title">
                                <h4>School Outreach<span class="bringer-accent">.</span></h4>
                            </div>
                            <div class="bringer-detailed-list-description">
                                <p>Partnering with schools to bring awareness programs directly to students, fostering understanding and early intervention.</p>
                            </div>
                            <div class="bringer-detailed-list-button">
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="service-details.html"></a>
                        </li>
                        <li>
                            <div class="bringer-detailed-list-title">
                                <h4>Community Collaborations<span class="bringer-accent">.</span></h4>
                            </div>
                            <div class="bringer-detailed-list-description">
                                <p>We’re building partnerships with legal clinics, law firms, educational institutions, and government bodies to extend opportunities for young people to learn, grow, and make better choices.</p>
                            </div>
                            <div class="bringer-detailed-list-button">
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="service-details.html"></a>
                        </li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="bringer-bento-grid bringer-grid-cta">
                    <div class="is-large bringer-masked-block in-view" data-unload="fade-left">
                        
                        <div class="bringer-grid-cta-media bringer-masked-media is-init" style="clip-path: url(&quot;#mask_9kny1zwf3&quot;);">
                            <div class="bringer-grid-cta-heading">Recognitions & Partnerships</div>
                        </div>
                        <div class="bringer-masked-content at-bottom-right">
                            <p class="bringer-large-text in-view" data-delay="100">See Our Efforts Towards UN SGD's Goals →</p>
                        </div>
                    <svg width="0" height="0" style="position: absolute; left: 0px; top: 0px; pointer-events: none; opacity: 0;">
            <defs>
                <clipPath id="mask_9kny1zwf3">
                    <path d="
                M0,24 
                a24,24 0 0 1 24,-24 
                L560,0 
                a24,24 0 0 1 24,24 
                L584,466.4 
                a24,24 0 0 1 -24,24 
                L403.6,490.4 
                a24,24 0 0 0 -24,24 
                L379.6,560 
                a24,24 0 0 1 -24,24 
                L24,584 
                a24,24 0 0 1 -24,-24 
                Z"></path>
                </clipPath>
            </defs>
        </svg></div>
                    <div class="is-medium bringer-block in-view" data-unload="fade-right" style="--mouse-x: -429px; --mouse-y: 301.26666259765625px;">
                        <p class="bringer-large-text">Our initiative aligns with the UN’s Sustainable Development Goal 16: Peace, Justice, and Strong Institutions. We are actively working with the Ministry of Education (MOE) and other public sector entities to ensure that our programs are effective, sustainable, and far-reaching.</p>
                    </div>
                    <div class="is-small in-view" data-delay="100" data-unload="zoom-out">
                        <a href="contacts.html" class="bringer-square-button">
                            <span class="bringer-icon bringer-icon-explore"></span>
                        </a>
                    </div>
                    <div class="is-small in-view" data-delay="200" data-unload="zoom-out">
                        <?php
                        $sdg_image = get_template_directory_uri() . '/assets/img/sdg-16.webp';
                        ?>
                        <img src="<?php echo esc_url( $sdg_image ); ?>" alt="UN SDG's #16" width="960" height="960">
                    </div>
                </div>
            </section>

            <!-- Section: Portfolio -->
            <section class="backlight-bottom">
                <!-- Section Title -->
                <div class="stg-row bringer-section-title">
                    <div class="stg-col-8 stg-offset-2">
                        <div class="align-center">
                            <h2 data-appear="fade-up" data-unload="fade-up">Articles</h2>
                            <p class="bringer-large-text" data-appear="fade-up" data-unload="fade-up" data-delay="100">We are proud of our work, and we are always looking for new challenges. Take a look at some of our recent articles:</p>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Grid -->
                <div class="bringer-grid-3cols bringer-tp-grid-2cols stg-normal-gap bringer-parallax-media" data-stagger-appear="zoom-in" data-stagger-unload="fade-up" data-stagger-delay="100" data-delay="100">

                    <?php
                    // WP_Query to get 3 latest blog posts
                    $args = array(
                        'post_type' => 'post', // Get posts from the blog
                        'posts_per_page' => 3, // Only fetch 3 posts
                        'orderby' => 'date', // Order by post date
                        'order' => 'DESC' // Show the latest posts first
                    );
                    $latest_posts = new WP_Query( $args );

                    if ( $latest_posts->have_posts() ) :
                        while ( $latest_posts->have_posts() ) : $latest_posts->the_post();

                            // Get the categories
                            $categories = get_the_category();
                            $category = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized'; // Get the first category

                            // Get the post date
                            $post_date = get_the_date( 'F j, Y' ); // Format the date to be readable

                            // Get the featured image
                            $post_image = get_the_post_thumbnail_url( get_the_ID(), 'large' ); // Get the featured image URL
                            ?>

                            <!-- Card Item -->
                            <div class="bringer-block bringer-portfolio-card">
                                <div class="bringer-portfolio-card-image">
                                    <img class="bringer-lazy" data-src="<?php echo esc_url( $post_image ); ?>" alt="<?php the_title(); ?>" width="1200" height="1200">
                                </div>
                                <div class="bringer-portfolio-card-footer">
                                    <div class="bringer-portfolio-card-title">
                                        <span class="bringer-meta"><?php echo $category; ?></span>
                                        <h6><?php the_title(); ?></h6>
                                        <p class="bringer-post-meta"><?php echo $post_date; ?></p>
                                    </div>
                                    <span class="bringer-icon bringer-icon-explore"></span>
                                </div>
                                <a href="<?php the_permalink(); ?>"></a>
                            </div><!-- .bringer-portfolio-card -->

                            <?php
                        endwhile;
                        wp_reset_postdata(); // Reset post data after loop
                    else :
                        echo '<p>No posts found.</p>';
                    endif;
                    ?>
                </div><!-- .bringer-grid -->
                <div class="align-right stg-top-gap">
                <?php 
                    $articles_page = get_page_by_path( 'articles' );
                    if ( $articles_page ) :
                        $articles_url = get_permalink( $articles_page->ID );
                        ?>
                        <a href="<?php echo esc_url( $articles_url ); ?>" class="bringer-arrow-link">Explore All Works</a>
                    <?php endif; ?>


                </div>
            </section>
        </div><!-- .stg-container -->
        <!-- Footer -->
	</main>