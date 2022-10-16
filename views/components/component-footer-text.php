<?php

$footerTitle = get_field('footer_title', 'option') ?: null;
$footerText = get_field('footer_text', 'option') ?: null;

if ($footerTitle) { ?>
    <h2 class="mb-5 text-2xl underline underline-offset-2"><?= $footerTitle; ?></h2>
<?php }

if ($footerText) { ?>
    <div><?= $footerText; ?></div>
<?php }
