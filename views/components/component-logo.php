<?php

$logos = get_field('logos', 'options') ?? null;
$logoDark = '';

if ($logos) {
    $logoDark = $logos['dark'];
}

if (!$logoDark) {
    return;
}
?>

<a href="<?= get_home_url(); ?>">
    <img class="block w-24 sm:w-32 lg:w-auto"
        src="<?= esc_attr($logoDark['url']);?>"
        alt="<?= esc_attr($logoDark['alt']) ?>"
        width="<?= esc_attr($logoDark['width']) ?>"
        height="<?= esc_attr($logoDark['height'])?>">
</a>
