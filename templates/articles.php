<?php
/**
 * Template Name: Articles
 * Description: A custom template for displaying WordPress articles in a portfolio-style layout.
 */
get_header(); ?>

<main id="bringer-main">
    <div class="stg-container">
        <!-- Section: Page Title -->
        <section class="backlight-bottom">
            <div class="stg-row">
                <div class="stg-col-6 stg-offset-3">
                    <div class="align-center">
                        <h1 class="bringer-page-title" data-appear="fade-up" data-unload="fade-up">Latest Articles</h1>
                        <p class="bringer-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">Where Sparks Ignite Revolutions.</p>
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
            <div class="bringer-grid-3cols bringer-tp-grid-2cols bringer-tp-centered-last-item stg-normal-gap bringer-parallax-media " data-threshold="0.5"  data-appear="fade-up" data-delay="150" data-unload="fade-up">
                
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
                <div class="bringer-block bringer-portfolio-card">
                    <div class="bringer-portfolio-card-image">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <img class="bringer-lazy" src="img/null.png" data-src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" width="1200" height="1200">
                        <?php else : ?>
                            <img class="bringer-lazy" src="img/null.png" data-src="path/to/default-image.jpg" alt="Default image" width="1200" height="1200">
                        <?php endif; ?>
                    </div>
                    <div class="bringer-portfolio-card-footer">
                        <div class="bringer-portfolio-card-title">
                            <span class="bringer-meta"><?php the_category( ', ' ); ?></span>
                            <h6><?php the_title(); ?></h6>
                            <span class="bringer-meta"><?php the_date(); ?></span> <!-- Display date -->
                        </div>
                        <span class="bringer-icon bringer-icon-explore"></span>
                    </div>
                    <a href="<?php the_permalink(); ?>"></a>
                </div><!-- .bringer-portfolio-card -->
                
                <?php
                    endwhile;
                    wp_reset_postdata(); // Reset after the loop
                else :
                ?>
                    <p>No articles found.</p>
                <?php endif; ?>

            </div><!-- .bringer-grid -->
        </section>
    </div>
</main>

<?php get_footer(); ?>
