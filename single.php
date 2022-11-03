<?php

use Hwale\Controllers\Post;

get_header(); ?>

<main id="main" class="main">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();

            if (Post::init()) {
                Post::init();
            }
        }
    } ?>
</main>

<?php get_footer();
