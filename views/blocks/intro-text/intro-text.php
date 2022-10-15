<?php

$text = get_field('text') ?: null;

?>

<section class="block-intro-text">
    <?php if ($text) { ?>
        <div class="container pt-8 pb-4">
            <div class="prose max-w-full text-1.5xl">
                <?= $text; ?>
            </div>
        </div>
    <?php } ?>
</section>
