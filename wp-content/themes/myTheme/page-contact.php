<?php get_header() ?>
<div class="contact-page-overlay"></div>
<main class="main contact-page-main">
    <!-- 👉 SERVICES section -->
    <section class="contact-page">
        <img src="/wp-content/themes/myTheme/src/assets/images/page-overlay.png" aria-hidden="true"
            class="page-overlay" />
        <figure class="page-banner">
            <h1 class="page-banner-heading">Contact</h1>
            <img src="/wp-content/themes/myTheme/src/assets/images/phone-contact.gif" alt="about-us-page"
                class="page-banner-img img-contain" />
            <video src="/wp-content/themes/myTheme/src/assets/images/contact-banner-video.mp4"
                class="contact-video-overlay" loop muted autoplay></video>
        </figure>
        <div class="contact-page__container container subpage-margin-block">
            <div class="contact-page-wrapper">
                <div class="page-heading-wrapper">
                    <h2 class="page-h2-heading">Contact us today</h2>
                    <p class="page-subheading">
                        Feel free to contact us today with your enquiry either by phone,
                        WhatsApp or email us directly using the details provided below.
                        <br /><br />
                        Our company location can be viewed below on the map provided.
                        Should you require an Engineer to visit site on a potential
                        project please call or email our office to arrange a convenient
                        date. <br /><br />
                        Please note we have experienced designers and engineers located
                        all over the UK so can provide a local contact to take on your
                        project if you have a more complex design query.
                    </p>
                </div>
                <div class="contact-page-section-inner-wrapper">
                    <?php get_template_part('template-parts/content', 'contact-btns') ?>
                    <div class="hire-us__contact">
                        <span class="hire-us__info">If you want to start a career with us, feel free to fill out
                            the form.</span>
                        <div>
                            <a href="https://forms.gle/CTt6JpwKZoHg4Adc6" target="_blank"
                                class="btn job-application-form-btn hidden-left">
                                Job application form
                                <img src="/wp-content/themes/myTheme/src/assets/icons/google-form-icon.png"
                                    alt="gmail" /></a>
                        </div>
                    </div>
                    <div class="hire-us__contact">
                        <span class="hire-us__info">CONTACT INFO</span>
                        <div>
                            <div class="hire-us__col">
                                <div><img src="/wp-content/themes/myTheme/src/assets/icons/ids-mini-logo.svg"
                                        class="icon" aria-hidden="true"> Imagine Draughting Services LTD</div>
                                <div><img src="/wp-content/themes/myTheme/src/assets/icons/location-icon.svg"
                                        class="icon" aria-hidden="true">17 Stock Road • Blackpool • Lancashire • FY4
                                    4ZF</div>
                                <div><img src="/wp-content/themes/myTheme/src/assets/icons/mail-icon.svg" class="icon"
                                        aria-hidden="true">info@imagine-dsuk.com</div>
                                <div><img src="/wp-content/themes/myTheme/src/assets/icons/phone-icon.svg" class="icon"
                                        aria-hidden="true">+44 (0) 1253 543259</div>
                                <div><img src="/wp-content/themes/myTheme/src/assets/icons/phone-icon.svg" class="icon"
                                        aria-hidden="true">07588 449656</div>
                            </div>
                        </div>
                    </div>
                    <div class="hire-us__contact">
                        <span class="hire-us__info">Feel free to reach out to us! Fill out the form below, and we’ll get
                            back to you soon.</span>
                        <div class="contact-form__wrapper">
                            <!-- <form class="contact-form">
                                <div class="contact-form__wrapper-row">
                                    <label for="name" class="contact-form__label">Enter your full name</label>
                                    <input required type="text" id="name" placeholder="John Smith"
                                        class="contact-form__input">
                                </div>
                                <div class="contact-form__wrapper-row">
                                    <label for="email" class="contact-form__label">Enter email address</label>
                                    <input required type="email" id="email" placeholder="john.smith@gmail.com"
                                        class="contact-form__input">
                                </div>
                                <div class="contact-form__wrapper-row">
                                    <label for="phone" class="contact-form__label">Enter phone number</label>
                                    <input type="tel" id="phone" placeholder="+44 (0) 1234 5678"
                                        class="contact-form__input">
                                </div>
                                <div class="contact-form__wrapper-row">
                                    <label for="options" class="contact-form__label">Choose an option:</label>
                                    <select id="options" name="options">
                                        <option value="option1">3D CAD Services</option>
                                        <option value="option2">2D CAD Services</option>
                                        <option value="option3">CAD Conversion Services</option>
                                        <option value="option4">CAD Agency</option>
                                        <option value="option5">Rendering and animation</option>
                                        <option value="option6">Reverse Engineering</option>
                                        <option value="option7">Prototype Manufacturing</option>
                                        <option value="option8">Plotting Service</option>
                                        <option value="option9">Fast Track Service</option>
                                    </select>
                                </div>
                                <div class="contact-form__wrapper-row">
                                    <textarea type="text" class="contact-form__input"
                                        placeholder="Enter you message"></textarea>
                                </div>
                                <button class="contact-form__submit" type="submit">Send an enquiry <img
                                        src="/wp-content/themes/myTheme/src/assets/icons/mail-submit-icon.svg"
                                        alt=""></button>
                            </form> -->

                            <?php echo do_shortcode('[contact-form-7 id="160e4c5" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                    <div class="hire-us__contact hire-us__contact--google-map">
                        <span class="hire-us__info hire-us__info-location-heading">Our location on map <img
                                src="/wp-content/themes/myTheme/src/assets/icons/google-map-icon.svg"
                                alt="goole map"></span>
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2356.166278250386!2d-3.0006254221844877!3d53.804324872425674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b43c8e187b4a1%3A0x761a5a501ea77951!2s17%20Stock%20Rd%2C%20Blackpool%20FY4%204ZF%2C%20UK!5e0!3m2!1sen!2shr!4v1738934854553!5m2!1sen!2shr"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>