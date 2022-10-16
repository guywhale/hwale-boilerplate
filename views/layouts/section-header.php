<header class="bg-grey">
    <div class="w-full h-2 bg-red"></div>
    <div class="container">
        <div class="relative wrapper">
            <div class="flex justify-between">
                <div class="relative flex items-center justify-center py-8">
                    <div class="absolute top-0 w-0 h-0 border-transparent border-t-[15px] border-x-[15px] md:border-t-[20px] border-t-red md:border-x-[20px] border-b-0"></div>
                    <?php get_template_part('/views/components/component', 'logo', [
                        'colour' => 'dark',
                    ]); ?>
                </div>
                <div class="flex flex-col items-end justify-center py-8 sm:justify-start sm:items-center lg:items-end sm:flex-row lg:flex-col">
                    <button class="relative z-30 flex flex-col justify-between appearance-none w-9 sm:order-2 h-7 cursor lg:hidden"
                        data-nav-btn
                    >
                        <span data-top class="block w-full h-1 transition bg-red"></span>
                        <span data-middle class="block w-full h-1 transition bg-red"></span>
                        <span data-bottom class="block w-full h-1 transition bg-red"></span>
                    </button>

                    <span class="sm:mr-8 sm:order-1 lg:mr-0">
                        <?php get_template_part('/views/components/component', 'contact'); ?>
                    </span>

                    <span class="order-1 lg:order-2">
                    <?php wp_nav_menu([
                        'container' => 'nav',
                        'container_class' => 'absolute z-10 h-screen lg:h-auto inset-0 lg:static flex justify-end lg:block w-full lg:mt-[30px] translate-x-[125%] transition-transform lg:translate-x-0',
                        'menu_class' => 'menu relative  before:absolute before:top-0 before:-right-[900px] before:w-[1000px] before:h-full before:bg-inherit flex flex-col lg:flex-row lg:justify-between pt-25vh lg:pt-0 bg-grey lg:bg-transparent text-1.5xl lg:text-base font-medium uppercase',
                    ]); ?>
                    </span>

                </div>
            </div>
        </div>
    </div>
</header>
