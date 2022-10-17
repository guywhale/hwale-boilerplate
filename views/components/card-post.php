<?php

use function Hwale\getSVG;

if (!$args['id']) {
    return;
}

['id' => $id] = $args;
$padding = 'px-3';
$permalink = get_the_permalink($id);
$title = get_the_title($id);
$excerpt = get_the_excerpt($id);

?>

<a class="flex flex-col w-full max-w-[438px] md:w-1/2 mx-auto md:mx-0 py-4 md:py-3 md:max-w-full lg:py-0 lg:w-1/3 group <?= $padding; ?>"
    href="<?= $permalink; ?>"
>
    <div class="h-[17.5rem] overflow-hidden bg-grey-light">
        <?php if (get_the_post_thumbnail($id)) {
            echo get_the_post_thumbnail($id, 'full', [
                'class' => 'block w-full h-full object-cover group-hover:scale-110 transition-transform duration-500'
            ]);
        } ?>
    </div>
    <div class="flex-auto px-5 pt-5 pb-7 bg-grey-light">
        <?php if ($title) { ?>
            <h2 class="flex items-center text-lg font-bold leading-6 uppercase text-red">
                <span class="pr-8"><?= $title; ?></span>
                <span class="fill-red group-hover:animate-swing-right">
                    <?= getSVG('arrow-r.svg'); ?>
                </span>
            </h2>
        <?php } ?>

        <div class="pt-5 text-sm+">
            <?= $excerpt; ?>
        </div>
    </div>
</a>