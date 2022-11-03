<?php

[
    'copyright' => $copyright,
] = $data;

?>

<footer>
    <div class="container">
        <?php if ($copyright) { ?>
            <p class="text-center"><?= $copyright; ?></p>
        <?php } ?>
    </div>
</footer>
