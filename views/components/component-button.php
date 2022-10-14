<?php

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

?>

<<?= $openingTag; ?>>
    <span><?= $label; ?></span>
</<?= $tag ?>>
