<?php

$colour = 'transparent';
$buttonColour = 'red';
$buttonVisibility = 'hidden md:inline';
$styleClasses = 'flex-wrap';
$titleClasses = 'hidden sm:block text-xl lg:text-2.5xl md:mr-4 lg:mr-8';
$iconClasses = 'hidden sm:block mr-4';
$svgColour = 'fill-black';

[
    'colour' => $colour,
] = $args;


$phoneNumber = get_field('telephone', 'option') ?: null;
$email = get_field('email', 'option') ?: null;

if ($colour === 'red') {
    $styleClasses = ' flex-wrap sm:flex-nowrap justify-center lg:justify-start bg-red text-white py-[18px] px-4 lg:pr-10 2xl:pr-[60px] md:pl-[30px]';
    $iconClasses = 'mr-3 sm:mr-4 mb-2 sm:mb-0';
    $titleClasses = 'text-center sm:text-start w-full sm:w-auto text-xl sm:text-2.5xl lg:text-2xl 2xl:text-2.5xl mb-4 sm:mb-0 mr-4 md:mr-8';
    $buttonColour = 'black';
    $svgColour = 'fill-white';
    $buttonVisibility = '';
}

?>

<div class="flex items-center <?= $styleClasses; ?>">
    <span class="<?= $iconClasses; ?> <?= $svgColour; ?>"><?= file_get_contents(get_template_directory() . '/src/assets/phone.svg'); ?></span>
    <?php if ($phoneNumber) { ?>
        <p class="<?= $titleClasses; ?> font-semibold ">
            Call us on <a href="tel:<?= $phoneNumber; ?>" target="_blank" class="transition-all underline-offset-4 hover:underline">
                <?= $phoneNumber; ?>
            </a>
        </p>
    <?php } ?>

    <span class="<?= $buttonVisibility; ?>">
        <?php get_template_part('/views/components/component', 'button', [
            'type' => 'link',
            'label' => 'Email',
            'url' => 'mailto:' . $email,
            'newTab' => true,
            'colour' => $buttonColour,
            'emailIcon' => true
        ]); ?>
    </span>
</div>
