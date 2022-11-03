<?php

[
    'tag' => $tag,
    'type' => $type,
    'href' => $href,
    'target' => $target,
    'classes' => $classes,
    'label' => $label,
    'rel' => $rel
] = $data;

// echo '<pre style="color: #fff;">'; print_r($data); echo '</pre>';
?>

<<?= $tag, ' class="button ' . $classes . '"', $type, $href, $target, $rel; ?>
>
    <?= $label; ?>
</<?= $tag; ?>>
