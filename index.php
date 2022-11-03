<?php

use Hwale\Controllers\Page;

get_header(); ?>

<main id="main" class="main">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();

            if (Page::init()) {
                Page::init();
            }
        }
    } ?>
</main>

<?php get_footer();
