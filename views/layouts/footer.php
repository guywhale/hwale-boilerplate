<?php

[
    'copyright' => $copyright,
] = $data;

?>

<footer class="py-4 text-white bg-gray-600">
    <div class="container">
        <?php if ($copyright) { ?>
            <p class="text-center"><?= $copyright; ?></p>
        <?php } ?>
    </div>
</footer>
