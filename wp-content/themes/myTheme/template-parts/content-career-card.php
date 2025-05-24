                <article class="open-position-card">
                    <div class="open-position-card__header">
                        <span class="open-position-card__headline">
                            <img src="/wp-content/themes/myTheme/src/assets/icons/right-arrow-icon.svg" alt="arrow"
                                class="hidden-left" style="animation-delay: 1s;">
                            <span class="open-position-card__heading hidden-left">
                                <?php
                                the_title();
                                ?>
                            </span>
                        </span>
                        <span class="open-position-card__date-wrapper">
                            <span class="open-position-card__date">
                                <?php
                                if (get_field('date_open')) { ?>
                                <div class="date-start">Date opened:</div> <?php
                                                    the_field('date_open');
                                                }
                                                    ?>
                            </span>
                            <span class="open-position-card__date">
                                <?php
                                if (get_field('date_closed')) { ?>
                                <div class="date-start">Date closed:</div> <?php
                                                    the_field('date_closed');
                                                }
                                                    ?>
                            </span>
                        </span>
                    </div>
                    <div class="open-position-card__body">
                        <ul class="open-position-card__list">
                            <li class="open-position-card__item ">
                                <?php
                                if (get_field('job_feature-1')) { ?>
                                <img src="/wp-content/themes/myTheme/src/assets/icons/checkmark-fast-track-icon.svg"
                                    alt="checkmark" class="icon"><?php
                                                                        the_field('job_feature-1');
                                                                    }
                                                                        ?>
                            </li>
                            <li class="open-position-card__item ">
                                <?php
                                if (get_field('job_feature-2')) { ?>
                                <img src="/wp-content/themes/myTheme/src/assets/icons/checkmark-fast-track-icon.svg"
                                    alt="checkmark" class="icon"><?php
                                                                        the_field('job_feature-2');
                                                                    }
                                                                        ?>
                            </li>
                            <li class="open-position-card__item ">
                                <?php
                                if (get_field('job_feature-3')) { ?>
                                <img src="/wp-content/themes/myTheme/src/assets/icons/checkmark-fast-track-icon.svg"
                                    alt="checkmark" class="icon"><?php
                                                                        the_field('job_feature-3');
                                                                    }
                                                                        ?>
                            </li>
                            <li class="open-position-card__item ">
                                <?php
                                if (get_field('job_feature-4')) { ?>
                                <img src="/wp-content/themes/myTheme/src/assets/icons/checkmark-fast-track-icon.svg"
                                    alt="checkmark" class="icon"><?php
                                                                        the_field('job_feature-4');
                                                                    }
                                                                        ?>
                            </li>
                            <li class="open-position-card__item ">
                                <?php
                                if (get_field('job_feature-5')) { ?>
                                <img src="/wp-content/themes/myTheme/src/assets/icons/checkmark-fast-track-icon.svg"
                                    alt="checkmark" class="icon"><?php
                                                                        the_field('job_feature-5');
                                                                    }
                                                                        ?>
                            </li>
                        </ul>
                        <div class="open-position-card__body-row">
                            <h3 class="join-our-team-heading">Join our team</h3>
                            <span class="open-position-card__body-row-text">Feel free and choose way to contact
                                us</span>
                            <div class="career-hire-us__contact">
                                <a href="mailto:info@imagine-dsuk.com" class="contact-hire-us-card hidden-left"
                                    style="animation-delay: .2s;"><img
                                        src="/wp-content/themes/myTheme/src/assets/images/hire-us-gmail-icon.svg"
                                        alt="gmail" /></a>
                                <a href="https://wa.me/447588449656?text=Hello,%20I%20would%20like%20a%20quote%20for%20our%20project."
                                    class="contact-hire-us-card hidden-left" style="animation-delay: .4s;"><img
                                        src="/wp-content/themes/myTheme/src/assets/images/hire-us-wup-icon.svg"
                                        alt="whatsapp" /></a>
                                <a href="tel:+447588449656" class="contact-hire-us-card hidden-left"
                                    style="animation-delay: .6s;"><img
                                        src="/wp-content/themes/myTheme/src/assets/images/hire-us-phone-icon.svg"
                                        alt="phone" /></a>
                                <a target="_blank" href="https://www.facebook.com/imaginedsuk"
                                    class="contact-hire-us-card hidden-left" style="animation-delay: .8s;"><img
                                        src="/wp-content/themes/myTheme/src/assets/images/hire-us-fb-icon.svg"
                                        alt="facebook" /></a>
                                <a target="_blank" href="https://www.instagram.com/imaginedraughting/"
                                    class="contact-hire-us-card hidden-left" style="animation-delay: 1s;"><img
                                        src="/wp-content/themes/myTheme/src/assets/images/hire-us-instagram-icon.svg"
                                        alt="instagram" /></a>
                                <a target="_blank"
                                    href="https://www.linkedin.com/company/imagine-draughting-services-ltd/posts/?feedView=all"
                                    class="contact-hire-us-card hidden-left" style="animation-delay: 1s;"><img
                                        src="/wp-content/themes/myTheme/src/assets/icons/hire-us-linkedin-icon.svg"
                                        alt="linkedin" /></a>
                            </div>
                        </div>
                    </div>
                </article>