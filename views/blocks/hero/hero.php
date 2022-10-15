<?php

$title = get_field('title') ?: null;
$image = get_field('image') ?: null;

?>

<section data-block-hero class="relative">
    <?php if ($image) { ?>
        <img class="object-cover w-full lg:max-h-[500px] 2xl:max-h-full"
            src="<?= $image['url']; ?>"
            alt="<?= $image['alt']; ?>"
            width="<?= $image['width']; ?>"
            height="<?= $image['height']; ?>">
    <?php } ?>
    <div class="absolute inset-0 flex items-end w-full h-full">
        <div class="container">
            <div class="wrapper">
                <?php if ($title) { ?>
                    <h1 class="inline-block text-white uppercase font-extrabold text-1.5xl bg-red py-[18px] px-[30px]">
                        <?= $title; ?>
                    </h1>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
