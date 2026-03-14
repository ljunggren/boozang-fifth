<!-- signup field -->
<section class="signup_section  section_spacing_top_small">
    <div class="container">
        <?php
        $footer_text = get_field('footer_text', 'option');
        $sign_up_link = get_field('sign_up_link', 'option');
        $sign_up_link_demo = get_field('sign_up_link_demo', 'option'); ?>

        <div class="btn_container badges">
            <div class="sf-root" data-id="2969897" data-badge="light-default" data-variant-id="sf">
                <a href="https://sourceforge.net/software/product/Boozang/" target="_blank">Boozang Reviews</a>
            </div>

            <div class="sf-root" data-id="2969897" data-badge="users-love-us-new-white" data-variant-id="sd">
                <a href="https://slashdot.org/software/p/Boozang/" target="_blank">Boozang Reviews</a>
            </div>

            <div class="sf-root" data-id="2969897" data-badge="partner" data-variant-id="tbs">
                <a href="https://topbusinesssoftware.com/products/Boozang/reviews/" target="_blank">Boozang Reviews</a>
            </div>
            <div class="capterra_img bigger">
                <a href="https://www.capterra.com/p/166146/Boozang/reviews/">
                    <img border="0" src="https://brand-assets.capterra.com/badge/f2d59cba-8965-4346-86cc-255b859ccbc1.svg" alt="Boozang Reviews" loading="lazy" />
                </a>
            </div>
            <div class="capterra_img">
                <a href="https://www.getapp.com/it-management-software/a/boozang/reviews/"> <img border="0" src="https://brand-assets.getapp.com/badge/8fc04a2f-c58e-40bd-8641-dac27b3b2ac3.png" alt="Boozang GetApp Reviews" loading="lazy" /></a>
            </div>
        </div>

        <div class="text_center">
            <?php if ($footer_text) { ?>
                <?php echo $footer_text; ?>
            <?php
            } ?>
        </div>
        <div class="btn_container">
            <?php if ($sign_up_link) { ?>
                <a class="btn_link green" href="<?php echo $sign_up_link['url']; ?>" target="<?php echo $sign_up_link['target']; ?>" rel="noopener noreferrer"><?php echo $sign_up_link['title']; ?>
                </a>
            <?php } ?>
            <?php if ($sign_up_link_demo) { ?>
                <a class="btn_link outline_color_darkblue" href="<?php echo $sign_up_link_demo['url']; ?>" target="<?php echo $sign_up_link_demo['target']; ?>" rel="noopener noreferrer"><?php echo $sign_up_link_demo['title']; ?>
                </a>
            <?php } ?>
        </div>
    </div>
</section>

<!-- footer -->
<footer id="footer" class="footer_main darkblue section_spacing_top_small">
    <div class="container">
        <div class="row align-items-start justify-content-between">
            <div class="col-md-6 col-xl-3">
                <div class="logo">
                    <a href="<?php echo home_url() ?>" class="logo" aria-label="Boozang home page">
                        <img class="logo_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse@2x.png 325w" width="208" height="51" alt="Boozang home page" loading="lazy" />
                    </a>
                </div>
                <div class="customer_contact">
                    <p class="contact_heading"><span class="email_icon colored_blue_part"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                        </span>Drop us an email
                    </p>
                    <p>We are always happy to help if you have any questions.</p>

                    <?php $mail_link = get_field('mail_link', 'option');
                    if ($mail_link) { ?>
                        <a href="<?php echo esc_url('mailto:' . antispambot(($mail_link))); ?>" class="underscore_link colored_blue_part" target="_top" aria-label="Boozang email"><?php echo esc_html($mail_link); ?>
                        </a>
                    <?php   } ?>
                </div>
                <div class="social_icons">
                    <ul class="social">
                        <!-- repeater -->
                        <?php
                        $social_svgs = array(
                            'facebook' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256z"/></svg>',
                            'linkedin-in' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg>',
                            'x-twitter' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>',
                        );
                        if (have_rows('social_icons', 'option')) {
                            while (have_rows('social_icons', 'option')) {
                                the_row();

                                $social_url = get_sub_field('social_url');
                                $social_site = get_sub_field('social_site');
                                $svg = isset($social_svgs[$social_site]) ? $social_svgs[$social_site] : esc_html($social_site); ?>
                                <li class="social_item">
                                    <a href="<?php echo $social_url; ?>" aria-label="<?php echo $social_site; ?>">
                                        <?php echo $svg; ?>
                                    </a>
                                </li>
                        <?php
                            }
                        } ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-12 col-xl-8">
                <div class="row align-items-start links">
                    <?php
                    if (function_exists('acf_add_options_page')) {
                        //repeater field
                        if (have_rows('footer_links', 'option')) {
                            while (have_rows('footer_links', 'option')) {
                                the_row(); ?>

                                <div class="col-6 col-md-3">
                                    <p class="footer_links_heading"><?php the_sub_field('heading'); ?> </p>
                                    <!-- repeater field -->
                                    <?php if (have_rows('links')) {  ?>
                                        <ul class="footer_links">
                                            <?php while (have_rows('links')) {
                                                the_row(); ?>

                                                <?php $link = get_sub_field('link'); ?>
                                                <li class="link_item">
                                                    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </div>
                    <?php }
                        }
                    }  ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_copy">
        <div class="container">
            <div class="row align-items-start justify-content-between">
                <div class="col-10">
                    <div class="copy">
                        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> INC. ALL RIGHTS RESERVED. </p>
                        <p> Theme by <a href="https://frilans.karinljunggren.com/" target="_blank" rel="noopener noreferrer" aria-label="Karin Ljunggren Home Page"><span class="colored_blue_part">Karin Ljunggren</span></a> </p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="back_to_top_link">
                        <a href="#header_top" aria-label="To top of page">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20" fill="currentColor" aria-hidden="true" title="To top of page"><path d="M201.4 137.4c12.5-12.5 32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L224 205.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l160-160z"/></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>