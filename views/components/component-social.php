<?php

$socials = get_field('sites', 'option') ?: null;

?>
<div class="bg-grey-light flex justify-between p-4 sm:justify-center items-center sm:py-[28px] lg:py-[18px] sm:px-8 h-full">
    <?php if ($socials) {
        foreach ($socials as $social) { ?>
            <a class="block mx-2 sm:mx-4"
                href="<?= $social['link'] ?>"
                target="_blank">
                <img src="<?= $social['logo']['url']; ?>"
                    alt="<?= $social['logo']['alt']; ?>"
                    title="<?= $social['name'] ?>"
                    width="<?= $social['logo']['width']; ?>"
                    height="<?= $social['logo']['height']; ?>">
            </a>
        <?php }
    } ?>
</div>
