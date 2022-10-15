<?php

$testimonials = get_field('testimonials') ?: null;

if (!$testimonials) {
    return;
}

?>

<section block-testimonials-slider class="pt-4 py-19">
    <div class="container">
        <div class="flex flex-row">
            <div class="w-4/5 "></div>
        </div>
    </div>
</section>
