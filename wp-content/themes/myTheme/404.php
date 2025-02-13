<?php get_header() ?>
<main class="main blogs-main">
    <div class="blogs-overlay"></div>
    <!-- 👉 BLOGS section -->
    <section class="blogs-page-section">
        <img src="/wp-content/themes/myTheme/src/assets/images/page-overlay.png" aria-hidden="true"
            class="page-overlay" />
        <figure class="page-banner">
            <h1 class="page-banner-heading">404 PAGE</h1>
            <img src="/wp-content/themes/myTheme/src/assets/images/team-page-blogs.gif" alt="about-us-page"
                class="page-banner-img img-contain" />
        </figure>
        <div class="blogs-page-section__container container subpage-margin-block">
            <div class="blogs-page-section-wrapper">
                <div class="blogs-page-section-inner-wrapper">
                    <div class="blogs-page-section__blogs-col">
                        <span>Oops! Page Not Found.</span>
                    </div>
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>