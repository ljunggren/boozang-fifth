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
                    <img border="0" src="https://brand-assets.capterra.com/badge/f2d59cba-8965-4346-86cc-255b859ccbc1.svg" alt="Boozang Reviews" />
                </a>
            </div>
            <div class="capterra_img">
                <a href="https://www.getapp.com/it-management-software/a/boozang/reviews/"> <img border="0" src="https://brand-assets.getapp.com/badge/8fc04a2f-c58e-40bd-8641-dac27b3b2ac3.png" /></a>
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
                        <img class="logo_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse@2x.png 325w" width="208" height="51" alt="Boozang home page" />
                    </a>
                </div>
                <div class="customer_contact">
                    <p class="contact_heading"><span class="email_icon colored_blue_part"><i class="fa-regular fa-envelope"></i>
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
                        <?php if (have_rows('social_icons', 'option')) {
                            while (have_rows('social_icons', 'option')) {
                                the_row();

                                $social_url = get_sub_field('social_url');
                                $social_site = get_sub_field('social_site'); ?>
                                <li class="social_item">
                                    <a href="<?php echo $social_url; ?>" aria-label="<?php echo $social_site; ?>">
                                        <i class="fa-brands fa-<?php echo $social_site; ?>" aria-hidden="true"></i>
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
                            <i class="fas fa-angle-up" aria-hidden="true" aria-label="To top of page" title="To top of page"></i>
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