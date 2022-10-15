<?php

$services = get_field('services') ?: null;

if (!$services) {
    return;
}

?>

<section block-services-rollup class="pt-4 py-19">
    <div class="container">
        <div class="flex flex-wrap -mx-3">
            <div class="flex flex-wrap wrapper">
                <?php foreach ($services as $service) {
                    get_template_part('/views/components/component', 'card', ['id' => $service->ID]);
                }
                ?>
            </div>
        </div>
    </div>
</section>
