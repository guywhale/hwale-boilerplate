<?php

use function Hwale\get;

$address = get_field('address', 'option') ?: null;
$phoneNumber = get_field('telephone', 'option') ?: null;
$email = get_field('email', 'option') ?: null;

get('component', 'logo', [
    'colour' => 'light',
    'classes' => 'inline-block mb-5'
]); ?>

<?php if ($address) { ?>
    <div class="mb-5"><?= $address; ?></div>
<?php } ?>
<?php if ($phoneNumber) { ?>
    <a class="block group"
        href="tel:<?= $phoneNumber; ?>"
        target="_blank">
        Tel: <span class="transition-colors group-hover:text-red"><?= $phoneNumber; ?></span>
    </a>
<?php } ?>
<?php if ($email) { ?>
    <a class="block group"
        href="mailto:<?= $email; ?>"
        target="_blank">
        Email: <span class="underline transition-colors underline-offset-2 group-hover:text-red"><?= $email; ?></span>
    </a>
<?php } ?>
