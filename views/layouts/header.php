<?php

[
    'title' => $title
] = $data;

?>

<header>
    <?php if ($title) { ?>
        <h1 class="py-16 text-center"><?= $title; ?></h1>
    <?php } ?>
</header>
