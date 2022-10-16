<?php

$socials = get_field('sites', 'option') ?: null;

?>
<div class="bg-grey-light flex justify-center items-center py-[18px] px-8 h-full">
    <?php if ($socials) {
        foreach ($socials as $social) { ?>
            <a class="inline-block mx-4"
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
