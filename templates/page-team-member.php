<?php
get_header(); 
?>
<main id="lm-main">
    <div class="stg-container">
        <section>
            <div class="stg-row stg-large-gap">
                <div class="stg-col-6 stg-tp-col-8 stg-tp-offset-2 stg-tp-bottom-gap-l in-view" data-unload="fade-left">
                    <div class="st-lazy-wrapper is-loaded stop-anim">
                        <?php
                        $team_member_slug = get_query_var('team_member_name');

                        if ($team_member_slug) {
                            $args = array(
                                'post_type' => 'team-member',
                                'name' => $team_member_slug,
                                'posts_per_page' => 1, 
                            );

                            $team_member_query = new WP_Query($args);

                            if ($team_member_query->have_posts()) :
                                while ($team_member_query->have_posts()) : $team_member_query->the_post();
                                    $name = get_post_meta(get_the_ID(), 'name', true);
                                    $role = get_post_meta(get_the_ID(), 'role', true);
                                    $image_id = get_post_meta(get_the_ID(), 'image', true);
                                    $image_url = wp_get_attachment_url($image_id); // Fetch the image URL
                                    ?>
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($name); ?>" class="team-member-image">
                                <?php endwhile;
                                wp_reset_postdata(); // Reset the WP Query
                            else :
                                echo '<p>Team member not found.</p>';
                            endif;
                        }
                        ?>
                    </div>
                </div>
                <div class="stg-col-6 stg-vertical-space-between" data-unload="fade-right">
                    <div>
                        <?php
                        if ($team_member_slug) {
                            $args = array(
                                'post_type' => 'team-member',
                                'name' => $team_member_slug,
                                'posts_per_page' => 1,
                            );

                            $team_member_query = new WP_Query($args);

                            if ($team_member_query->have_posts()) :
                                while ($team_member_query->have_posts()) : $team_member_query->the_post();
                                    $name = get_post_meta(get_the_ID(), 'name', true);
                                    $role = get_post_meta(get_the_ID(), 'role', true);
                                    $bio = get_the_content();
                                    ?>
                                    <div class="lm-title-with-label stg-bottom-gap">
                                        <h1 class="in-view"><?php echo esc_html($name); ?></h1>
                                        <span class="lm-label in-view" data-delay="100"><?php echo esc_html($role); ?></span>
                                    </div>
                                    <article class="in-view" data-delay="150"><?php echo wp_kses_post($bio); ?></article>
                                <?php endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p>Team member details not available.</p>';
                            endif;
                        }
                        ?>
                    </div>

                    <!-- Contacts -->
                    <div class="lm-member-contacts">
                    <?php
                        $email = get_field('team-email');
                        $phone = get_field('team-phone');
                    ?>
                    <div class="lm-member-contacts-list">
                        <?php if ($email): ?>
                            <a href="mailto:<?php echo esc_html($email); ?>" class="in-view">
                                <?php echo esc_html($email); ?>
                            </a>
                        <?php else: ?>
                            <p>No email provided</p>
                        <?php endif; ?>

                        <?php if ($phone): ?>
                            <a href="tel:+<?php echo esc_html($phone); ?>" data-delay="100" class="in-view">
                                <?php echo esc_html($phone); ?>
                            </a>
                        <?php else: ?>
                            <p>No phone number provided</p>
                        <?php endif; ?>
                    </div>


                        <ul class="lm-socials-list" data-stagger-appear="fade-up">
                            <?php
                            $facebook = get_field('facebook');
                            $instagram = get_field('instagram');
                            $behance = get_field('behance');
                            $dribbble = get_field('dribbble');

                            if ($facebook): ?>
                                <li class="in-view" data-delay="0" data-unload="none" data-threshold="0.5">
                                    <a href="<?php echo esc_url($facebook); ?>" class="lm-socials-facebook">
                                        <i></i>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if ($instagram): ?>
                                <li class="in-view" data-delay="50" data-unload="none" data-threshold="0.5">
                                    <a href="<?php echo esc_url($instagram); ?>" class="lm-socials-instagram">
                                        <i></i>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if ($behance): ?>
                                <li class="in-view" data-delay="0" data-unload="none" data-threshold="0.5">
                                    <a href="<?php echo esc_url($behance); ?>" class="lm-socials-behance">
                                        <i></i>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if ($dribbble): ?>
                                <li class="in-view" data-delay="50" data-unload="none" data-threshold="0.5">
                                    <a href="<?php echo esc_url($dribbble); ?>" class="lm-socials-dribbble">
                                        <i></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


    </div>
</main>

<?php
get_footer();
