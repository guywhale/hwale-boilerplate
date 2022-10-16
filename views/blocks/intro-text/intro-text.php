<?php

$text = get_field('text') ?: null;

?>

<section data-block-intro-text>
    <?php if ($text) { ?>
        <div class="container pt-8 pb-4">
            <div class="wrapper">
                <div class="prose max-w-full text-xl md:text-1.5xl">
                    <?= $text; ?>
                </div>
            </div>
        </div>
    <?php } ?>
</section>
