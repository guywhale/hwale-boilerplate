<?php

$logos = get_field('logos', 'options') ?? null;

if (!$logos) {
    return;
}

$logo = $logos['dark'];

[
    'colour' => $colour,
    'classes' => $classes
] = $args;

if ($colour === 'light') {
    $logo = $logos['light'];
}


?>

<a class="<?= $classes; ?>"
    href="<?= get_home_url(); ?>"
>
    <img class="block w-24 sm:w-32 lg:w-auto"
        src="<?= esc_attr($logo['url']);?>"
        alt="<?= esc_attr($logo['alt']) ?>"
        width="<?= esc_attr($logo['width']) ?>"
        height="<?= esc_attr($logo['height'])?>">
</a>
