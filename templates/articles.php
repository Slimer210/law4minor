<?php
/**
 * Template Name: Articles
 * Description: A custom template for displaying WordPress articles in a portfolio-style layout.
 */
get_header(); ?>

<main id="lm-main">
    <div class="stg-container">
        <!-- Section: Page Title -->
        <section class="backlight-bottom">
            <div class="stg-row">
                <div class="stg-col-6 stg-offset-3">
                    <div class="align-center">
                        <h1 class="lm-page-title" data-appear="fade-up" data-unload="fade-up">Latest Articles</h1>
                        <p class="lm-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">Where Sparks Ignite Revolutions.</p>
                    </div>
                </div>
            </div>
            <div class="stg-row align-center stg-top-gap stg-search-bar" data-appear="fade-up" data-delay="150" data-unload="fade-up">
                <form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" class="stg-row align-center">
                    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search post..." class="stg-col-5">
                    <button type="submit" id="searchsubmit">Search</button>
                </form>
            </div>
        </section>
        
        <!-- Section: Grid -->
        <section>
            <h3 data-appear="fade-up" data-delay="200" data-unload="fade-up">All Articles</h3>
            
            <!-- Portfolio Grid -->
            <div class="lm-grid-3cols lm-tp-grid-2cols lm-tp-centered-last-item stg-normal-gap lm-parallax-media " data-threshold="0.5"  data-appear="fade-up" data-delay="150" data-unload="fade-up">
                
                <?php
                // WP Query to fetch latest posts
                $args = array(
                    'post_type' => 'post', // Only fetch regular posts
                    'posts_per_page' => 6, // Number of articles to show
                );
                $query = new WP_Query( $args );

                // Check if there are posts
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post();
                ?>
                
                <!-- Portfolio Card Item -->
                <div class="lm-block lm-portfolio-card">
                    <div class="lm-portfolio-card-image">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <img class="lm-lazy" src="img/null.png" data-src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" width="1200" height="1200">
                        <?php else : ?>
                            <img class="lm-lazy" src="img/null.png" data-src="path/to/default-image.jpg" alt="Default image" width="1200" height="1200">
                        <?php endif; ?>
                    </div>
                    <div class="lm-portfolio-card-footer">
                        <div class="lm-portfolio-card-title">
                            <span class="lm-meta"><?php the_category( ', ' ); ?></span>
                            <h6><?php the_title(); ?></h6>
                            <span class="lm-meta"><?php the_date(); ?></span> <!-- Display date -->
                        </div>
                        <span class="lm-icon lm-icon-explore"></span>
                    </div>
                    <a href="<?php the_permalink(); ?>"></a>
                </div><!-- .lm-portfolio-card -->
                
                <?php
                    endwhile;
                    wp_reset_postdata(); // Reset after the loop
                else :
                ?>
                    <p>No articles found.</p>
                <?php endif; ?>

            </div><!-- .lm-grid -->
        </section>
    </div>
</main>

<?php get_footer(); ?>
