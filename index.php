<?php

use function Hwale\get;

get_header(); ?>

<main id="main" class="main">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();

            if (Hwale\Controllers\Page::init()) {
                Hwale\Controllers\Page::init();
            }
        }
    } ?>
</main>

<?php get_footer();
