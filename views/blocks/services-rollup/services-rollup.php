<?php

use function Hwale\get;

$services = get_field('services') ?: null;

if (!$services) {
    return;
}

?>

<section data-block-services-rollup class="pt-4 py-19">
    <div class="container">
        <div class="flex flex-wrap -mx-3">
            <div class="flex flex-wrap wrapper">
                <?php foreach ($services as $service) {
                    get('component', 'card-post', ['id' => $service->ID]);
                }
                ?>
            </div>
        </div>
    </div>
</section>
