<?php get_header() ?>
<main class="main blogs-main">
    <div class="blogs-overlay"></div>
    <!-- 👉 BLOGS section -->
    <section class="blogs-page-section">
        <img src="/wp-content/themes/myTheme/src/assets/images/page-overlay.png" aria-hidden="true"
            class="page-overlay" />
        <figure class="page-banner">
            <h1 class="page-banner-heading">All blogs</h1>
            <img src="/wp-content/themes/myTheme/src/assets/images/team-page-blogs.gif" alt="about-us-page"
                class="page-banner-img img-contain" />
        </figure>
        <div class="blogs-page-section__container container subpage-margin-block">
            <div class="blogs-page-section-wrapper">
                <div class="page-heading-wrapper">
                    <h2 class="page-h2-heading">Take a look at our articles</h2>
                    <p class="page-subheading">
                        See below a selection of our blog articles at Imagine Draughting
                        Services Ltd.
                    </p>
                </div>
                <div class="blogs-page-section-inner-wrapper">
                    <div class="blogs-page-section__blogs-col">
                        <?php

                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                        );

                        $the_query = new WP_Query($args);


                        if ($the_query->have_posts()) {
                            while ($the_query->have_posts()) {
                                $the_query->the_post(); ?>
                                <?php get_template_part('template-parts/content', 'blog-card') ?>
                        <?php }
                            wp_reset_postdata();
                        } ?>
                    </div>
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>