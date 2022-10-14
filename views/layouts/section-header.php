<header class="bg-grey">
    <div class="w-full h-2 bg-red"></div>
    <div class="container py-8">
        <div class="flex justify-between">
            <div class="flex items-center">
                <?php get_template_part('/views/components/component', 'logo'); ?>
            </div>
            <div>
                <?php get_template_part('/views/components/component', 'contact'); ?>
                <?php wp_nav_menu(); ?>
            </div>
        </div>
    </div>
</header>
