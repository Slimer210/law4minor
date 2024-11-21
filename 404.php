<?php
/**
 * Template Name: 404 Error Page
 * Description: A custom 404 error page for displaying a not-found message.
 */
get_header(); ?>

<main id="bringer-main">
    <div class="stg-container">
        <section class="backlight-bottom stg-large-gap">
            <div class="stg-row">
                <div class="stg-col-6 stg-offset-3">
                    <div class="align-center">
                        <!-- Display 404 Error Message -->
                        <h1 class="bringer-page-title" data-appear="fade-up" data-unload="fade-up">Page Not Found</h1>
                        <p class="bringer-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">
                            Sorry, the page you're looking for doesn't exist. Please check your URL or try searching.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Link Back to Home -->
            <div class="align-center divider-top stg-top-gap-xl" data-unload="zoom-in">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="bringer-icon-link divider-top">
                    <div class="bringer-icon-wrap">
                        <i class="bringer-icon bringer-icon-explore"></i>
                    </div>
                    <div class="bringer-icon-link-content">
                        <h4>Back to Home</h4>
                    </div>
                </a><!-- .bringer-icon-link -->
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
