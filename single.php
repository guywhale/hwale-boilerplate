<?php

use function Hwale\get;

get_header(); ?>

<main id="main" class="main">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();

            if (get('partial', 'content-single-' . get_post_type())) {
                get('partial', 'content-single-' . get_post_type());
            }
        }
    } ?>
</main>

<?php get_footer();
