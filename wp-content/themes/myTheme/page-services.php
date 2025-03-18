<?php get_header() ?>
<main class="main all-services-main">
    <!-- 👉 SERVICES section -->
    <section class="all-services">
        <img src="/wp-content/themes/myTheme/src/assets/images/page-overlay.png" aria-hidden="true"
            class="page-overlay" />
        <figure class="page-banner">
            <h1 class="page-banner-heading">Services</h1>
            <img src="/wp-content/themes/myTheme/src/assets/images/services.gif" alt="about-us-page"
                class="page-banner-img img-contain" />
        </figure>
        <div class="all-services__container container subpage-margin-block">
            <div class="all-services-wrapper">
                <div class="page-heading-wrapper">
                    <h2 class="page-h2-heading">Our Services</h2>
                    <p class="page-subheading">
                        We provide professional all CAD services for precise modeling,
                        product visualization, and technical drawings. Our solutions are
                        ideal for manufacturing, prototyping, and design visualization,
                        ensuring high-quality results tailored to your needs.
                    </p>
                </div>
                <div class="services-page-section-inner-wrapper">
                    <?php get_template_part('template-parts/content', 'card-services-section') ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>