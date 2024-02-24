<?php get_header(); ?>

<section data-scroll-container class="border-y-2  py-12 lg:py-24 overflow-hidden">
    <div class="flex flex-col gap-10 mb-20 items-center">
        <h2 class="font-heading text-[2.5rem] leading-[2.5rem] md:text-6xl text-light-primary flex items-center gap-2">
            <div class="glowing-line  relative -top-2 text-center md:text-left"></div>Something About Me
        </h2>

    </div>
    <?php if (have_rows("repeater")) :
        while (have_rows("repeater")) : the_row(); ?>
            <div class="lg:mb-40 flex flex-col lg:flex-row lg:odd:flex-row-reverse gap-10 px-8 md:px-16 lg:px-24 odd:text-right  " data-scroll data-scroll-speed="3">
                <div data-js="left" class=" flex items-center   w-full h-[200px] "><?= get_sub_field('about_me_text') ?></div>
                <div data-js="right" class="  w-full h-[200px] flex items-center justify-around ">
                    <?php if (have_rows('about_me_image_repeater')) :
                        while (have_rows('about_me_image_repeater')) : the_row(); ?>
                            <div class="w-40 h-40 md:w-48 md:h-48 rounded-full">
                                <img src="<?= get_sub_field('about_me_image')['url'] ?>" alt="<?= get_sub_field('about_me_image')['alt'] ?>" class="w-full h-full rounded-full object-cover">
                            </div>
                    <?php endwhile;
                    endif;
                    ?>
                </div>

            </div>
    <?php
        endwhile;
    endif; ?>

</section>

<?php get_footer() ?>