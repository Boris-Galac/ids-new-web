<?php get_header() ?>
<main class="main service-main">
    <!-- 👉 FAQ section -->
    <section class="services-page-section">
        <img src="/wp-content/themes/myTheme/src/assets/images/page-overlay.png" aria-hidden="true"
            class="page-overlay" />
        <figure class="page-banner">
            <img src="/wp-content/themes/myTheme/src/assets/images/about-us-page-ids.gif" alt="about-us-page"
                class="page-banner-img img-contain" />
        </figure>
        <div class="services-page-section__container container subpage-margin-block">
            <div class="services-page-section-wrapper">
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
                    <div class="services-page__heading-wrapper">
                        <h1 class="services-page-heading">CAD conversions</h1>
                        <img src="/wp-content/themes/myTheme/src/assets/images/conversion.gif" alt="CAD services" />
                    </div>
                    <div class="services-page-section__body">
                        <div class="services-page-section__text-wrapper">
                            <p class="body-paragraph">
                                On some Projects valuable information already exists and can be implemented to speed up
                                the 3D Design process. Drawings may have already been created providing dimensions,
                                materials used, thickness and geometry to illustrate parts that make up a product.
                                <br><br>
                                Below you can see some of examples:
                            </p>
                        </div>
                        <figure
                            class="services-page-section__gallery gallery services-page-section__gallery--conversion-desktop">
                            <a href="/wp-content/themes/myTheme/src/assets/images/services-page-imgs/cad-conversion-img (1)-img.jpg"
                                data-caption="Imagine Draughting Services">
                                <img src="/wp-content/themes/myTheme/src/assets/images/services-page-imgs/conversion-img (1).png"
                                    alt="IDS" />
                            </a>
                            <a href="/wp-content/themes/myTheme/src/assets/images/services-page-imgs/cad-conversion-img (2)-img.jpg"
                                data-caption="Imagine Draughting Services">
                                <img src="/wp-content/themes/myTheme/src/assets/images/services-page-imgs/conversion-img (2).jpg"
                                    alt="IDS" />
                            </a>
                            <a href="/wp-content/themes/myTheme/src/assets/images/services-page-imgs/conversion-img (3)-img.png"
                                data-caption="Imagine Draughting Services">
                                <img src="/wp-content/themes/myTheme/src/assets/images/services-page-imgs/conversion-img (3).jpg"
                                    alt="IDS" />
                            </a>
                            <a href="/wp-content/themes/myTheme/src/assets/images/services-page-imgs/conversion-img (4)-img.png"
                                data-caption="Imagine Draughting Services">
                                <img src="/wp-content/themes/myTheme/src/assets/images/services-page-imgs/conversion-img (4).jpg"
                                    alt="IDS" />
                            </a>
                        </figure>
                        <?php get_template_part('template-parts/content', 'nav-services') ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>