<?php

use function Hwale\getSVG;

$type = 'link';
$tag = 'a';
$buttonType = '';
$url = '';
$href = '';
$label = 'Add a label';
$colour = 'red';
$newTab = false;
$emailIcon = false;

[
    'type' => $type,
    'url' => $url,
    'label' => $label,
    'colour' => $colour,
    'newTab' => $newTab,
    'emailIcon' => $emailIcon
] = $args;

if ($type === 'button') {
    $tag = 'button';
} elseif ($type === 'submit') {
    $tag = 'button';
    $buttonType = 'type="submit"';
}

if ($url && $type === 'link') {
    $href = 'href="' . $url . '" ';
}

if ($newTab && $type === 'link') {
    $target = 'target="_blank"';
}

$openingTag = implode(' ', [$tag, $buttonType, $href, $target]);
$colourClasses = 'text-white bg-red hover:bg-black';

if ($colour === 'black') {
    $colourClasses = 'text-white bg-black hover:bg-crimson hover:shadow-md';
}
?>

<<?= $openingTag; ?>
    class="<?= $colourClasses; ?>
        inline-flex items-center text-center text-lg font-semibold uppercase appearance-none rounded-md px-11 py-[10px] transition-colors duration-200 ease-in-out border-0"
>
    <?php if ($emailIcon) { ?>
        <span class="mr-2"><?= getSVG('email.svg'); ?></span>
    <?php } ?>
    <span><?= $label; ?></span>
</<?= $tag ?>>
