<?php
// header background
$color = get_field('header_background');
if (is_home() || is_archive()) {
    $color = get_field('header_background', get_option('page_for_posts'));
}
?>
<div id="nav-wrap" class="">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="main_menu" role="navigation" aria-label="Main Navigation">
                    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Boozang home page">
                        <!--extra double size image for retina-->
                        <?php
                        if ($color === 'darkblue' || $color === 'blue') { ?>
                          <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse.png"
                            srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse@2x.png 325w"
                            width="208" height="51" alt="Boozang home page" />
                        <?php
                        } else { ?>
                          <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang.png"
                            srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang@2x.png 325w"
                            width="208" height="51" alt="Boozang home page" />
                        <?php
                        } ?>
                    </a>

                    <div class="nav_links">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                            ));
                            ?>
                        <section class="signup">
                            <ul>
                                <li><a href="https://ai.boozang.com/" aria-label="Boozang Login" class="">Login</a></li>
                                <li>
                                    <a href="https://ai.boozang.com/#security/signup" aria-label="Boozang Sign Up" class="btn_link green">
                                        Try for Free
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <!--hamburger-->
                    <button class="menu_toggle_btn" aria-expanded="false" aria-label="Mobile Menu">
                        <div aria-hidden="true"></div>
                    </button>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="nav-mobile">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Boozang home page">

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse.png"
            srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse@2x.png 325w"
            width="208" height="51" alt="Boozang home page" />
    </a>
    <div class="nav_links">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
        ));
        ?>
        <div class="signup">
            <ul>
                <li>
                    <a href="https://ai.boozang.com/" aria-label="Boozang Login">
                        Login
                    </a>
                </li>
                <li>
                    <a class="btn_link green" href="https://ai.boozang.com/#security/signup"
                        aria-label="Boozang Sign Up">
                       Try for Free
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>