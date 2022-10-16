<?php

$colour = 'transparent';
$buttonColour = 'red';
$styleClasses = '';
$titleClasses = 'text-2.5xl';
$svgColour = 'fill-black';

[
    'colour' => $colour,
] = $args;


$phoneNumber = get_field('telephone', 'option') ?: null;
$email = get_field('email', 'option') ?: null;

if ($colour === 'red') {
    $styleClasses = 'justify-center lg:justify-start bg-red text-white py-[18px] lg:pr-10 2xl:pr-[60px] pl-[30px]';
    $titleClasses = 'text-2.5xl lg:text-2xl 2xl:text-2.5xl';
    $buttonColour = 'black';
    $svgColour = 'fill-white';
}

?>

<div class="flex items-center <?= $styleClasses; ?>">
    <span class="mr-4 <?= $svgColour; ?>"><?= file_get_contents(get_template_directory() . '/src/assets/phone.svg'); ?></span>
    <?php if ($phoneNumber) { ?>
        <p class="<?= $titleClasses; ?> font-semibold mr-8">
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
