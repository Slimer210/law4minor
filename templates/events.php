<?php
/**
 * Template Name: Events
 * Description: A custom template for the About Us page.
 */
get_header(); ?>

<main id="bringer-main">
    <section class="backlight-bottom">
        <div class="stg-row">
            <div class="stg-col-6 stg-offset-3">
                <div class="align-center">
                    <h1 class="bringer-page-title in-view" data-unload="fade-up">Events & Seminars</h1>
                    <p class="bringer-large-text in-view" data-delay="100" data-unload="fade-up">Where Creative Sparks Ignite Branding Revolutions.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Events -->
    <section>
        <div class="stg-container divider stg-top-gap-l">
            <h3 class="bringer-large-text" data-appear="fade-up" data-unload="fade-up">Upcoming Events</h3>
            <div class="bringer-detailed-list-wrap">
                <ul class="bringer-detailed-list">
                    <?php
                    $args = array(
                        'post_type' => 'events',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    $events_query = new WP_Query($args);

                    if ($events_query->have_posts()) :
                        while ($events_query->have_posts()) : $events_query->the_post();
                            $event_date = get_post_meta(get_the_ID(), 'date', true);
                            $event_description = get_post_meta(get_the_ID(), 'description', true);
                            if (empty($event_description)) {
                                $event_description = wp_trim_words(get_the_content(), 20); // Fallback to post content if no custom description
                            }
                            ?>
                            <li>
                                <div class="bringer-detailed-list-title">
                                    <h4><?php the_title(); ?></h4>
                                    <div class="bringer-detailed-list-description">
                                        <p><?php echo esc_html($event_date); ?></p>
                                    </div>
                                </div>
                                <div class="bringer-detailed-list-description">
                                    <p><?php echo esc_html($event_description); ?></p>
                                </div>
                                <div class="bringer-detailed-list-button">
                                    <span class="bringer-icon bringer-icon-explore"></span>
                                </div>
                                <a href="<?php the_permalink(); ?>"></a>
                            </li>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No upcoming events found.</p>';
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>