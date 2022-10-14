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
        src="<?= $logoDark['url'] ?>"
        alt="<?= $logoDark['alt'] ?>"
        width="<?= $logoDark['width'] ?>"
        height="<?= $logoDark['height'] ?>">
</a>
