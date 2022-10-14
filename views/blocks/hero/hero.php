<?php

// Support custom "anchor" values.
$anchor = '';

if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-example';

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$title = get_field('title') ?: null;
$image = get_field('image') ?: null;

?>

<section data-block-hero <?= $anchor; ?> class="<?= esc_attr($class_name); ?> relative">
    <?php if ($image) { ?>
        <img class="object-cover lg:max-h-[500px] 2xl:max-h-full"
            src="<?= $image['url']; ?>"
            alt="<?= $image['alt']; ?>"
            width="<?= $image['width']; ?>"
            height="<?= $image['height']; ?>">
    <?php } ?>
    <div class="absolute inset-0 flex items-end w-full h-full">
        <div class="container">
            <?php if ($title) { ?>
                <h1 class="inline-block text-white uppercase font-extrabold text-1.5xl bg-red py-[18px] px-[30px]"><?= $title; ?></h1>
            <?php } ?>
        </div>
    </div>
</section>
