<?php

use function Hwale\get;

get_header(); ?>

<main id="main" class="main">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();

            if (Hwale\Controllers\Post::init()) {
                Hwale\Controllers\Post::init();
            }
        }
    } ?>
</main>

<?php get_footer();
