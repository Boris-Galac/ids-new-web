<html <?php language_attributes() ?>>

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4LLK8SP6C0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4LLK8SP6C0');
</script>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="2D & 3D CAD services for UK and abroad.">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="2D, 3D, 2D and 3D services, CAD services, 3D modeling">
    <?php wp_head() ?>
    <meta name="google-site-verification" content="1qOxUM6OsgpiT3NHePboMrcDXWFL1MFXlSQl_x0TaBs" />
</head>

<body <?php body_class(!is_front_page() ? 'subpage' : ''); ?>>
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
                <li class="nav__item">
                    <a href="<?php echo site_url('services') ?>" class="nav__link">Services</a>
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
                    <a href="<?php echo site_url('faq') ?>" class="nav__link">FAQ</a>
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