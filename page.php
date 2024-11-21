<?php
get_header(); // Load the header
?>

<main id="bringer-main">
    <div class="stg-container">

        <?php if ( have_posts() ) : // Start the loop ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <section class="backlight-bottom">
                <div class="stg-row">
                    <div class="stg-col-6 stg-offset-3">
                        <div class="align-center">
                            <h1 class="bringer-page-title in-view" data-unload="fade-up"><?php the_title(); ?></h1>
                            <p class="bringer-large-text in-view" data-delay="100" data-unload="fade-up"><?php echo get_the_date(); ?></p>
                        </div>
                    </div>
                </div>
        
                </section>
        
                <div class="post-content stg-top-gap-l stg-bottom-gap-l" >
                    <?php the_content(); ?> <!-- Full post content -->
                </div>
        
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</main>

<?php
get_footer(); // Load the footer
?>
