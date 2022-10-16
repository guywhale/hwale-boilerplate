<?php

$testimonials = get_field('testimonials') ?: null;

if (!$testimonials) {
    return;
}

?>

<section data-block-testimonials-slider class="pt-8 pb-9 bg-grey-light">
    <div class="container">
        <div class="wrapper">
            <div class="flex flex-col justify-start -mx-3 lg:flex-row">
                <div class="lg:w-[10%] px-3 mb-4 lg:mb-0">
                    <span class="block w-20 lg:w-auto">
                        <?= file_get_contents(get_template_directory() . '/src/assets/testimonial.svg'); ?>
                    </span>
                </div>
                <div class="px-3 lg:w-4/5">
                    <div data-testimonials-swiper class="swiper lg:max-w-[87.3%]">
                        <div class="swiper-wrapper pb-9">
                            <?php foreach ($testimonials as $testimonial) {
                                $quote = get_field('quote', $testimonial->ID);
                                $name = get_field('name', $testimonial->ID);
                                $company = get_field('company', $testimonial->ID);
                                ?>
                                <div class="text-lg italic font-semibold swiper-slide xl:px-18">
                                    <?php if ($quote) { ?>
                                        <blockquote class="mb-5"><?= $quote; ?></blockquote>
                                    <?php } ?>
                                    <?php if ($name) { ?>
                                        <cite>-- <?= $name; ?>, <?= $company; ?></cite>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
