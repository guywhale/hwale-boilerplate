<footer class="text-sm font-medium text-white bg-black-normal pb-9">
  <div class="container">
    <div class="wrapper">
        <div class="flex flex-wrap pb-10">
            <div class="w-full lg:w-1/2">
                <?php get_template_part('/views/components/component', 'contact', [
                    'colour' => 'red',
                ]); ?>
            </div>
            <div class="w-full lg:w-1/2">
                <?php get_template_part('/views/components/component', 'social'); ?>
            </div>
        </div>
        <div class="flex flex-wrap justify-center text-center pb-7 lg:pb-5 lg:text-left lg:justify-between lg:flex-nowrap">
            <div class="pb-8 lg:pb-0 lg:pr-40 xl:pr-0">
                <?php get_template_part('/views/components/component-footer', 'contact'); ?>
            </div>
            <div class="">
                <?php get_template_part('/views/components/component-footer', 'text'); ?>
            </div>
        </div>
        <div class="flex flex-wrap items-center justify-center sm:flex-nowrap sm:justify-between">
            <p class="w-full mb-4 text-center sm:mb-0 sm:text-left sm:w-auto">Copyright &copy; IHS UK LTD. All rights reserved</p>
            <a href="https://wearehdk.com/" target="_blank">
                <img src="<?= get_template_directory_uri() . '/src/assets/made-by-HdK.png'; ?>" alt="made by HdK">
            </a>
        </div>
    </div>
  </div>
</footer>
