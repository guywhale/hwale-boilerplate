<header class="bg-grey">
    <div class="w-full h-2 bg-red"></div>
    <div class="container">
        <div class="wrapper">
            <div class="flex justify-between">
                <div class="relative flex items-center justify-center py-8">
                    <div class="absolute top-0 w-0 h-0 border-transparent border-t-[15px] border-x-[15px] md:border-t-[20px] border-t-red md:border-x-[20px] border-b-0"></div>
                    <?php get_template_part('/views/components/component', 'logo', [
                        'colour' => 'dark',
                    ]); ?>
                </div>
                <div class="flex flex-col items-end py-8">
                    <?php get_template_part('/views/components/component', 'contact'); ?>
                    <?php wp_nav_menu([
                        'container' => 'nav',
                        'container_class' => 'w-full mt-[30px]',
                        'menu_class' => 'menu flex justify-between text-base font-medium uppercase',
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</header>
