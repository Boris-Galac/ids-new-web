<html <?php language_attributes() ?>>

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PH3M9WS8');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-836213571"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-836213571');
    </script>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="2D & 3D CAD services for UK and abroad.">
    <meta name="robots" content="index, follow">
    <meta name="keywords"
        content="2D, 3D, Solidworks, AutoCAD, CAD, 3D models, Cad conversion, Rendering, Plotting, CAD agency, 2D CAD services1 3D CAD Services">
    <?php wp_head() ?>
    <meta name="google-site-verification" content="1qOxUM6OsgpiT3NHePboMrcDXWFL1MFXlSQl_x0TaBs" />
</head>

<body <?php body_class(!is_front_page() ? 'subpage' : ''); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH3M9WS8" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header">
        <button class="ham-btn" aria-label="ham button" tabindex="0" aria-controls="nav" data-active="false">
            <div class="ham-btn-line"></div>
            <div class="ham-btn-line"></div>
            <div class="ham-btn-line"></div>
        </button>
        <nav class="nav" aria-expanded="false">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="<?php echo site_url() ?>" class="nav__link nav__link--home">Home
                        <img src="/wp-content/themes/myTheme/src/assets/icons/nav-link-home-icon.svg" alt="home icon">
                    </a>
                </li>
                <li class="nav__item nav__item--services">
                    <a href="<?php echo site_url('services') ?>" class="nav__link nav__link--services">Services</a>
                    <ul class="dropdown--nav__list">
                        <li class="dropdown--nav__item"><a class="dropdown--nav__link"
                                href="<?php echo site_url('2d') ?>">2D Services</a>
                            <img src="/wp-content/themes/myTheme/src/assets/icons/nav-services/2d-drawings-nav.gif"
                                class="icon" alt="2d services">
                        </li>
                        <li class="dropdown--nav__item"><a class="dropdown--nav__link"
                                href="<?php echo site_url('3d') ?>">3D Services</a>
                            <img src="/wp-content/themes/myTheme/src/assets/icons/nav-services/3d-cad-services-nav.gif"
                                class="icon" alt="3d services">
                        </li>
                        <li class="dropdown--nav__item"><a class="dropdown--nav__link"
                                href="<?php echo site_url('3d-modeling') ?>">3D CAD Models</a>
                            <img src="/wp-content/themes/myTheme/src/assets/icons/nav-services/3d-printing-nav.gif"
                                class="icon" alt="3d cad models">
                        </li>
                        <li class="dropdown--nav__item"><a class="dropdown--nav__link"
                                href="<?php echo site_url('conversion') ?>">CAD Conversion</a>
                            <img src="/wp-content/themes/myTheme/src/assets/icons/nav-services/conversion-nav.gif"
                                class="icon" alt="3d cubes rotating">
                        </li>
                        <li class="dropdown--nav__item"><a class="dropdown--nav__link"
                                href="<?php echo site_url('render') ?>">Rendering</a>
                            <img src="/wp-content/themes/myTheme/src/assets/icons/nav-services/render-nav.gif"
                                class="icon" alt="3d cubes rendering">
                        </li>
                        <li class="dropdown--nav__item"><a class="dropdown--nav__link"
                                href="<?php echo site_url('reverse') ?>">Reverse engineering</a>
                            <img src="/wp-content/themes/myTheme/src/assets/icons/nav-services/engineering-nav.gif"
                                class="icon" alt="engineering">
                        </li>
                        <li class="dropdown--nav__item"><a class="dropdown--nav__link"
                                href="<?php echo site_url('prototype') ?>">Prototype</a>
                            <img src="/wp-content/themes/myTheme/src/assets/icons/nav-services/prototype-nav.gif"
                                class="icon" alt="3d prototyping">
                        </li>
                        <li class="dropdown--nav__item"><a class="dropdown--nav__link"
                                href="<?php echo site_url('plotting') ?>">Plotting</a>
                            <img src="/wp-content/themes/myTheme/src/assets/icons/nav-services/plotting-nav.gif"
                                class="icon" alt="rotating engine">
                        </li>
                        <li class="dropdown--nav__item"><a class="dropdown--nav__link"
                                href="<?php echo site_url('fast-track') ?>">Fast track</a>
                            <img src="/wp-content/themes/myTheme/src/assets/icons/nav-services/fast-track-nav.gif"
                                class="icon" alt="fast service">
                        </li>
                        <li class="dropdown--nav__item"><a class="dropdown--nav__link"
                                href="<?php echo site_url('agency') ?>">CAD Agency</a>
                            <img src="/wp-content/themes/myTheme/src/assets/icons/nav-services/agency-nav.gif"
                                class="icon" alt="agency people">
                        </li>
                    </ul>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('team') ?>" class="nav__link">Our team</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('projects') ?>" class="nav__link">Projects</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('testimonials') ?>" class="nav__link">Testimonials</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('about-us') ?>" class="nav__link">About us</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('contact') ?>" class="nav__link">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="header__right-row">
            <div class="header__contact-info">
                <a href="mailto:info@imagine-dsuk.com"><img class="img-contain"
                        src="/wp-content/themes/myTheme/src/assets/icons/hero-gmail-icon.svg" alt="gmail" />
                    info@imagine-dsuk.com</a>
                <a href="tel:+4401253543259"><img class="img-contain"
                        src="/wp-content/themes/myTheme/src/assets/icons/hero-phone-icon.svg" alt="phone" />
                    01253 543259</a>
            </div>
            <a class="header__logo" href="<?php echo site_url() ?>"><img
                    src="/wp-content/themes/myTheme/src/assets/images/footer-logo.png" alt="logo image" /></a>
        </div>
        <div aria-hidden="true" class="indicator-scroll-line"></div>
    </header>