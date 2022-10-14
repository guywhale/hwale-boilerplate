<?php

$colour = 'transparent';
$buttonColour = 'red';
$styleClasses = '';
$svgColour = 'fill-black';

[
    'colour' => $colour,
] = $args;


$phoneNumber = get_field('telephone', 'option') ?: null;
$email = get_field('email', 'option') ?: null;

if ($colour === 'red') {
    $styleClasses = 'bg-red text-white py-[18px] pr-[60px] pl-[30px]';
    $buttonColour = 'black';
    $svgColour = 'fill-white';
}

?>

<div class="flex items-center <?= $styleClasses; ?>">
    <span class="mr-4 <?= $svgColour; ?>"><?= file_get_contents(get_template_directory() . '/src/assets/phone.svg'); ?></span>
    <?php if ($phoneNumber) { ?>
        <p class="text-2.5xl font-semibold mr-8">
            Call us on <a href="tel:<?= $phoneNumber; ?>" target="_blank" class="transition-all underline-offset-4 hover:underline">
                <?= $phoneNumber; ?>
            </a>
        </p>
    <?php } ?>

    <?php get_template_part('/views/components/component', 'button', [
        'type' => 'link',
        'label' => 'Email',
        'url' => 'mailto:' . $email,
        'newTab' => true,
        'colour' => $buttonColour,
        'emailIcon' => true
    ]); ?>
</div>
