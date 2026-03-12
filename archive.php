<?php get_header(); ?>

<div class="container_blog">
    <?php get_template_part('template-parts/blog/blog-sidebar'); ?>

    <div class="blog_flow section_spacing_top_small">
        <div class="container">
            <div class="row">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php get_template_part('template-parts/blog/content', get_post_format()); ?>
                    <?php endwhile; ?>
            </div>

            <div class="paginate_links">
                <?php
                    $pages = array(
                        'prev_text' => __('<button aria-label="Next page"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></button>'),
                        'next_text' => __('<button aria-label="Previous page"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5-12.5-32.8-12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg></button>'),
                    );
                    if (paginate_links($pages)) { ?>
                    <div class="btn">
                        <?php echo paginate_links($pages); ?>
                        <!-- </button> -->
                    <?php } ?>
                    </div>

                <?php else : ?>
                    <p><?php __('No Posts Found'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>