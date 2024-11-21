<?php
/**
 * Template Name: Contact Us
 * Description: A custom template for the About Us page.
 */
get_header(); ?>

<main id="bringer-main">
        <div class="stg-container">
            <!-- Section: Page Title -->
            <section class="backlight-bottom">
                <div class="stg-row stg-bottom-gap-l">
                    <div class="stg-col-6 stg-offset-3 align-center">
                        <h1 class="bringer-page-title" data-appear="fade-up" data-unload="fade-up">Get in Touch</h1>
                        <p class="bringer-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">We help businesses of all sizes achieve their goals. We believe every brand, big or small, deserves to shine.</p>
                    </div>
                </div>
                <div class="bringer-parallax-media" data-parallax-speed="20" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/contacts01.jpg" alt="Get in Touch" width="1920" height="960">
                </div><!-- .bringer-parallax-media -->
            </section>

            <!-- Section: About Us -->
            <!-- Section: Let's Talk -->
            <section class="backlight-top divider-bottom">
                <!-- Section Title -->
                <div class="stg-row bringer-section-title">
                    <div class="stg-col-8 stg-offset-2">
                        <div class="align-center">
                            <h2 data-appear="fade-up" data-unload="fade-up">Let's 🗣 talk!</h2>
                            <p class="bringer-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">Here's how you can connect with the Bringer team:</p>
                        </div>
                    </div>
                </div>
                <!-- Contacts Grid -->
                <div class="stg-row" data-stagger-appear="fade-up" data-delay="200" data-stagger-unload="fade-up">
                    <div class="stg-col-4 stg-tp-col-6 stg-tp-bottom-gap">
                        <!-- Phone -->
                        <div class="bringer-block stg-aspect-square stg-vertical-space-between">
                            <a href="tel:+12345556789" class="bringer-grid-item-link"></a>
                            <div>
                                <h5>Phone<span class="bringer-accent">.</span></h5>
                                <h6>+1 (234) 555-67-89</h6>
                            </div>
                            <p>Give us a call and chat directly with our friendly team. We're always happy to answer any questions.</p>
                        </div>
                    </div>
                    <div class="stg-col-4 stg-tp-col-6 stg-tp-bottom-gap">
                        <!-- Email -->
                        <div class="bringer-block stg-aspect-square stg-vertical-space-between">
                            <a href="mailto:bringer@example.com" class="bringer-grid-item-link"></a>
                            <div>
                                <h5>Email<span class="bringer-accent">.</span></h5>
                                <h6>bringer@example.com</h6>
                            </div>
                            <p>Send us a detailed message. We'll get back to you as soon as possible to discuss your creative project further.</p>
                        </div>
                    </div>
                    <div class="stg-col-4 stg-tp-col-12">
                        <!-- Social Media -->
                        <div class="bringer-block stg-aspect-square stg-tp-aspect-rectangle stg-vertical-space-between">
                            <div>
                                <h5>Social Media<span class="bringer-accent">.</span></h5>
                                <ul class="bringer-socials-list stg-small-gap" data-stagger-appear="fade-up" data-stagger-delay="75">
                                    <li>
                                        <a href="#" target="_blank" class="bringer-socials-facebook">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="bringer-socials-instagram">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="bringer-socials-x">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="bringer-socials-tiktok">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="bringer-socials-patreon">
                                            <i></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <p>Follow us on Social Media Platforms for a glimpse into our creative world, industry insights, and projects.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: CTA Form -->
            <section class="backlight-top is-fullwidth">
                <div class="stg-row stg-valign-middle stg-cta-with-image stg-tp-column-reverse">
                    <div class="stg-col-5" data-unload="fade-left">
                        <div class="bringer-offset-image" data-bg-src="img/cta/contact-section-bg.jpg" data-appear="fade-up" data-threshold="0.25"></div>
                        <form action="mail.php" method="post" class="bringer-contact-form bringer-block" data-fill-error="Please, fill out the contact form." data-appear="fade-right" data-threshold="0.25">
                            <div class="bringer-form-content">
                                <!-- Field: Name -->
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name" placeholder="Your Name" required>
                                <!-- Field: Email -->
                                <label for="email">Your Email</label>
                                <input type="email" id="email" name="email" placeholder="email@example.com" required>    
                                <!-- Field: Message -->
                                <label for="message">Your Message</label>
                                <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                                <!-- Form Button -->
                                <button type="submit" value="Send Message">Get a FREE Quote</button>
                                <div class="bringer-contact-form__response"></div>
                            </div>
                            <span class="bringer-form-spinner"></span>
                        </form>
                    </div>
                    <div class="stg-col-6 stg-offset-1" data-unload="fade-right">
                        <div class="bringer-cta-form-content">
                            <div class="bringer-cta-form-title" data-split-appear="fade-up" data-split-delay="100" data-split-by="line">
                                Let's discuss your next creative project.
                            </div>
                            <div class="bringer-cta-text">
                                <div class="stg-row stg-valign-middle">
                                    <div class="stg-col-2 stg-offset-2 stg-tp-col-1 stg-tp-offset-3 stg-m-col-1 stg-m-offset-2" data-appear="fade-right">
                                        <i class="bringer-cta-icon"></i>
                                    </div>
                                    <div class="stg-col-8 stg-tp-col-7 stg-m-col-8 stg-m-offset-1" data-appear="fade-left">
                                        <p class="bringer-large-text">We help creative agencies, designers, and other creative people showcase their perfect work.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bringer-cta-counters bringer-grid-3cols bringer-m-grid-3cols" data-stagger-appear="fade-up" data-stagger-delay="100">
                                <!-- Counter Item -->
                                <div class="bringer-counter bringer-small-counter" data-delay="3000">
                                    <div class="bringer-counter-number">420</div>
                                    <div class="bringer-counter-label">Projects Done</div>
                                </div><!-- .bringer-counter -->
                                <!-- Counter Item -->
                                <div class="bringer-counter bringer-small-counter" data-delay="3000">
                                    <div class="bringer-counter-number" data-suffix="K+">8</div>
                                    <div class="bringer-counter-label">Happy Clients</div>
                                </div><!-- .bringer-counter -->
                                <!-- Counter Item -->
                                <div class="bringer-counter bringer-small-counter" data-delay="3000">
                                    <div class="bringer-counter-number" data-suffix="+">12</div>
                                    <div class="bringer-counter-label">Years in Work</div>
                                </div><!-- .bringer-counter -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
	</main>

<?php get_footer(); ?>