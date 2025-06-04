<?php get_header() ?>
<main class="main career-main subpage">
    <!-- 👉 CAREER section -->
    <section class="career-page-section">
        <img src="/wp-content/themes/myTheme/src/assets/images/page-overlay.png" aria-hidden="true"
            class="page-overlay" />
        <figure class="page-banner">
            <h1 class="page-banner-heading">Careers</h1>
            <img src="/wp-content/themes/myTheme/src/assets/images/career.gif" alt="career-page"
                class="page-banner-img img-contain" />
        </figure>
        <div class="career-page__container container subpage-margin-block">
            <div class="page-heading-wrapper">
                <h2 class="page-h2-heading career-subheading">Eager to grow in a place where your ideas matter?</h2>
                <p>What a coincidence! We're looking for talented new colleagues to join us and grow with us.</p>
                <div class="career__btn-wrapper">
                    <a href="#open-position" class="btn open-position-btn">Check open positions <img
                            src="/wp-content/themes/myTheme/src/assets/icons/right-arrow-icon.svg" class="icon"
                            alt="arrow"></a>
                    <a href="<?php echo site_url('team') ?>" class="btn meet-the-team-btn secondary-btn--hover">Meet the
                        team
                        <img src="/wp-content/themes/myTheme/src/assets/icons/meat-the-team-icon.svg" alt="team" /></a>

                </div>
            </div>
            <article class="career__work-benefits">
                <div class="career__work-benefits-text-box">
                    <h3 class="career__work-benefits-heading hidden-left">work with us</h3>
                    <p class="hidden-left" style="animation-delay: .5s;">Join our global team of 2D AutoCAD and 3D
                        design experts. Since 2013, Imagine Draughting Services
                        has delivered award-winning CAD solutions across time zones, with designers from the UK,
                        Americas, India, and Australia. If you're passionate about design and growth, we want to hear
                        from you.</p>
                </div>
                <img src="/wp-content/themes/myTheme/src/assets/images/work-benefit-img.png"
                    alt="man in front of computer" class="hidden-right">
            </article>
            <div class="career__open-positions-wrapper">
                <h2 class="h2-heading" id="open-position">Open positions</h2>
                <?php
                $args = [
                    'post_type' => 'job',
                    'posts_per_page' => '-1'
                ];
                $jobs = new WP_Query($args);

                if ($jobs->have_posts()) {
                    while ($jobs->have_posts()) {
                        $jobs->the_post();
                        get_template_part('template-parts/content', 'career-card');
                    }
                    wp_reset_postdata();
                } else { ?>
                <div class="career__no-jobs">
                    <img src="/wp-content/themes/myTheme/src/assets/icons/info-icon.svg" alt="info icon" class="icon">
                    <p>There are no open job positions at the moment. :(</p>
                </div>
                <?php }
                ?>


            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>