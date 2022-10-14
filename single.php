<?php

get_header(); ?>

<main id="main" class="main">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();

            $partialsPath = '/src/views/partials/content';

            if (get_template_part($partialsPath . '-single-' . get_post_type() . 'php')) {
                get_template_part($partialsPath . '-single-' . get_post_type() . 'php');
            } else {
                get_template_part($partialsPath, 'single');
            }
        }
    } ?>
</main>

<?php get_footer();
