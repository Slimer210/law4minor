<?php
get_header(); // Load the header
?>

<main id="lm-main">
    <div class="stg-container">

        <?php if ( have_posts() ) : // Start the loop ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <section class="backlight-bottom">
                    <div class="stg-row stg-bottom-gap-l">
                        <div class="stg-col-8 stg-tp-bottom-gap in-view" data-unload="fade-left">
                            <h2><?php the_title(); ?></h2> <!-- Post Title -->
                        </div>
                        <div class="stg-col-4 tp-align-right in-view" data-unload="fade-right">
                            <div class="featured-image">
                                <?php
                                if ( has_post_thumbnail() ) : 
                                    the_post_thumbnail('large', ['class' => 'lm-featured-img', 'alt' => get_the_title()]);
                                endif;
                                ?>
                            </div> <!-- Featured Image -->
                        </div>

                    </div>
        
                    <div class="lm-hero-info-line" data-stagger-appear="fade-up" data-delay="200" data-unload="fade-up">
                        <div class="lm-meta in-view" data-delay="200" data-unload="none" data-threshold="0.5">
                            Date: <span><?php echo get_the_date(); ?></span> <!-- Post Date -->
                        </div>
                        <div class="lm-meta in-view" data-delay="250" data-unload="none" data-threshold="0.5">
                            Author: <span><?php the_author(); ?></span> <!-- Post Author -->
                        </div>
                        <div class="lm-meta in-view" data-delay="300" data-unload="none" data-threshold="0.5">
                            Category: <span><?php the_category( ', ' ); ?></span> <!-- Post Category -->
                        </div>
                    </div><!-- .lm-hero-info-line -->
                </section>
        
                <div class="post-content stg-top-gap-l stg-bottom-gap-l" >
                    <?php the_content(); ?> <!-- Full post content -->
                </div>
        
            <?php endwhile; ?>
        <?php endif; ?>
        
        <section class="divider-top in-view stg-row">
            <?php
            // Get the previous and next portfolio posts
            $previous_post = get_previous_post();
            $next_post = get_next_post();
            
            // Ensure that the posts exist
            if ($previous_post) :
                $previous_post_url = get_permalink($previous_post->ID);
                $previous_post_title = get_the_title($previous_post->ID);
            endif;
            
            if ($next_post) :
                $next_post_url = get_permalink($next_post->ID);
                $next_post_title = get_the_title($next_post->ID);
            endif;
            ?>
            
            <!-- Previous Project -->
            <div class="stg-col-5 stg-tp-bottom-gap in-view" data-unload="fade-left">
                <?php if ($previous_post) : ?>
                    <div class="align-center" data-unload="zoom-in">
                        <a href="<?php echo esc_url($previous_post_url); ?>" class="lm-icon-link lm-next-post stg-col">
                            <div class="lm-icon-link-content">
                                <h6>Previous Project</h6>
                                <h4><?php echo esc_html($previous_post_title); ?></h4>
                            </div>
                            <div>
                                <i class="lm-icon lm-icon-explore"></i>
                            </div>
                        </a><!-- .lm-icon-link -->
                    </div>
                <?php endif; ?>
            </div>

            <!-- Next Project -->
            <div class="stg-col-5 tp-align-right in-view" data-unload="fade-right">
                <?php if ($next_post) : ?>
                    <div class="featured-image">
                        <div class="align-center" data-unload="zoom-in">
                            <a href="<?php echo esc_url($next_post_url); ?>" class="lm-icon-link lm-next-post">
                                <div class="lm-icon-link-content">
                                    <h6>Next Project</h6>
                                    <h4><?php echo esc_html($next_post_title); ?></h4>
                                </div>
                                <div >
                                    <i class="lm-icon lm-icon-explore"></i>
                                </div>
                            </a><!-- .lm-icon-link -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>

    </div>
</main>

<?php
get_footer(); // Load the footer
?>
