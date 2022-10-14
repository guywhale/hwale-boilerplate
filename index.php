<?php

get_header(); ?>

<main id="main" class="main">
    <!-- example react component -->
    <!-- <div id="render-react-example-here"></div> -->
    <!-- end example react component -->

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();

            $partialsPath = '/views/partials/content';

            if (get_template_part($partialsPath, get_post_type())) {
                get_template_part($partialsPath, get_post_type());
            } else {
                get_template_part($partialsPath . '.php');
            }
        }
    } ?>
</main>

<?php get_footer();
