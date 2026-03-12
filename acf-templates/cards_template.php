<?php
if (get_row_layout() == 'cards_template') {

    $style = '';
    $color = get_sub_field('color');
    $bg_image = get_sub_field('background_image');

    if ($bg_image) {
        $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
    }  ?>
    <section class="cards_template <?php echo $color ?> section_spacing_top_medium" <?php echo $style; ?>>
        <div class="container">
            <?php
            $heading = get_sub_field('heading');
            $text = get_sub_field('text'); ?>

            <?php if ($heading) { ?>
                <div><?php echo $heading ?></div>
            <?php
            } ?>
            <?php if ($text) { ?>
                <p class="margin_2"><?php echo $text ?></p>
            <?php
            } ?>
            <ul class="cards_template_content">
                <?php
                // check if the repeater field has rows
                if (have_rows('single_card')) {
                    while (have_rows('single_card')) {
                        the_row();
                        $color = get_sub_field('color'); ?>

                        <li class="card_container <?php echo $color; ?>">
                            <div class="card_content_container">
                                <div class="icon">
                                    <?php
                                    $icon_code = get_sub_field('icon_code');
                                    $icon_svgs = array(
                                        'fa-solid fa-building' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="40" height="40" fill="currentColor" aria-hidden="true"><path d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z"/></svg>',
                                        'fa-solid fa-hotel' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="40" height="40" fill="currentColor" aria-hidden="true"><path d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM224 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H224zm80 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H320c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm80 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H224c-8.8 0-16 7.2-16 16zm112-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H320zM96 320v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V320c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zm128-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V320c0-8.8-7.2-16-16-16H224zm80 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V320c0-8.8-7.2-16-16-16H320c-8.8 0-16 7.2-16 16z"/></svg>',
                                        'fa-regular fa-circle-user' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="40" height="40" fill="currentColor" aria-hidden="true"><path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z"/></svg>',
                                    );
                                    if (isset($icon_svgs[$icon_code])) {
                                        echo $icon_svgs[$icon_code];
                                    } else {
                                        echo '<i class="' . esc_attr($icon_code) . '" aria-hidden="true"></i>';
                                    }
                                    ?>
                                </div>
                                <h3 class="title"><?php the_sub_field('heading'); ?></h3>
                                <p class="card_text"><?php the_sub_field('text'); ?></p>

                                <?php $link = get_sub_field('link');
                                $btn_class = 'btn_link outline_color_blue'
                                ?>
                                <?php if ($color === 'blue' || $color === 'darkblue') {
                                    $btn_class = 'btn_link outline_color_white';
                                } ?>

                                <?php if ($link) { ?>
                                    <a class="<?php echo $btn_class ?>" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>" rel="noopener noreferrer"><?php echo esc_html($link['title']); ?>
                                    </a>
                                <?php   } ?>
                            </div>
                        </li>
                <?php
                    }
                } ?>
        </div>
        </div>
    </section>
<?php
}
?>