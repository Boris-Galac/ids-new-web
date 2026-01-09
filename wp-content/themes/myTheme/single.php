<?php get_header() ?>

<main class="main blogs-main">
    <div class="blogs-overlay"></div>
    <!-- 👉 SINGLE BLOG section -->
    <section class="blogs-page-section">
        <img src="/wp-content/themes/myTheme/src/assets/images/page-overlay.png" aria-hidden="true"
            class="page-overlay" />
        <figure class="page-banner">
            <h1 class="page-banner-heading">Single blog</h1>
            <img src="/wp-content/themes/myTheme/src/assets/images/team-page-blogs.gif" alt="about-us-page"
                class="page-banner-img img-contain" />
        </figure>
        <div class="container">
            <a class="back-to-blogs-btn" href="<?php echo site_url('blog') ?>"><img
                    src="/wp-content/themes/myTheme/src/assets/icons/back-icon.svg" aria-hidden="true" />
                Back to all blogs</a>
        </div>
        <!-- <h1>sdfsdf</h1> -->
        <div class="blogs-page-section__container container subpage-margin-block">
            <div class="blogs-page-section-wrapper">
                <div class="blogs-page-section-inner-wrapper">
                    <div class="blogs-page-section__blogs-col">
                        <article class="single-blog-article">
                            <div class="single-blog-article__thumbnail">
                                <?php
                                // 1. ACF custom image
                                if (get_field('image-banner')) { ?>

                                    <img src="<?php echo esc_url(get_field('image-banner')['sizes']['pageBanner']); ?>"
                                        alt="image banner" class="banner__img">

                                <?php
                                    // 2. Default video fallback
                                } else { ?>

                                    <video
                                        src="<?php echo get_template_directory_uri(); ?>/src/assets/blog-video-overlay.mp4"
                                        class="blog-video-overlay" loop muted autoplay></video>

                                <?php } ?>

                            </div>
                            <div class="single-blog__meta-wrapper">
                                <span class="single-blog__meta-inner-wrapper"><img
                                        src="/wp-content/themes/myTheme/src/assets/icons/single-blog-person-icon.svg"
                                        alt="person" /><span><?php the_field('author-blog')  ?></span></span>
                                <span class="single-blog__meta-inner-wrapper"><span>Category:</span><span
                                        class="single-blog__meta-category"><?php the_category() ?></span></span>
                                <span class="single-blog__meta-inner-wrapper"><img
                                        src="/wp-content/themes/myTheme/src/assets/icons/single-blog-date-icon.svg"
                                        alt="person" /><span><?php the_time('F j, Y'); ?></span></span>
                            </div>
                            <div class="single-blog-article__body">
                                <h3 class="single-blog-article__heading">
                                    <?php the_title() ?>
                                </h3>
                                <?php the_content() ?>
                            </div>
                        </article>
                    </div>
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>