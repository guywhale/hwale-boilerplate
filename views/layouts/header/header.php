<?php

[
    'title' => $title
] = $data;

?>

<header>
    <?php if ($title) { ?>
        <h1 class="py-16 text-4xl text-center md:text-6xl lg:text-8xl"><?= $title; ?></h1>
    <?php } ?>
</header>
