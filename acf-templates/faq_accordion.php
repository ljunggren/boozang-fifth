<!-- faq accordion layout for Pages Content block-->

<?php if (get_row_layout() == 'faq_accordion') {
    $heading = get_sub_field('heading');
    $bgColor = get_sub_field('background_color'); ?>

    <section class="faq_accordion_section <?php echo $bgColor; ?> section_spacing_top_small">
        <div class="container">
            <?php if ($heading) { ?>
                <h2 class="margin_4"><?php echo $heading; ?></h2>
            <?php } ?>

            <div class="row">
                <div class="col-md-10">
                    <?php if (have_rows('faq_accordion_list')) { ?>
                        <?php while (have_rows('faq_accordion_list')) {
                            the_row();

                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer'); ?>

                            <button class="accordion_btn" aria-expanded="false" aria-label="FAQ content">
                                <div class="heading">
                                    <h3 class="smaller_size_text"><?php echo $question; ?>
                                    </h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16" height="16" fill="currentColor" aria-hidden="true" class="fa-angle-down"><path d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                                </div>
                                <div class="accordion_content medium_text">
                                    <p><?php echo $answer; ?></p>
                                </div>
                            </button>
                    <?php
                        }
                    } ?>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>
