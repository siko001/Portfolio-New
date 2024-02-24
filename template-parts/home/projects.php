<?php $query = new WP_Query(array(
    'post_type' => 'project',
    'posts_per_page' => 8,
    'orderby' => 'date',
    'order' => 'DESC',
    "meta_query" => array(
        array(
            "key" => "featured",
            "value" => "1",
            "compare" => "LIKE"
        )
    )
));
if ($query->have_posts()) {


?>
    <section class="border-y-2  py-12 lg:py-24">
        <div class="flex flex-col gap-10 items-center">
            <h2 class="font-heading text-6xl text-light-primary flex items-center gap-2">
                <div class="glowing-line relative -top-2"></div>Projects
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!--   Project Card -->
                <?php
                while ($query->have_posts()) {
                    $query->the_post();

                ?>

                    <div data-gradient="border-gradient" class="p-1 rounded-2xl  flex items-center justify-center relative duration-300">
                        <div class="  w-[350px] lg:w-[275px] items-center flex flex-col gap-4 bg-[#1a202c] rounded-2xl">
                            <div class="border-b-2 w-full flex relative justify-center items-center h-[175px] md:h-[150px]  rounded-t-2xl">

                                <div class="text-3xl relative text-white w-full h-full">
                                    <img class="relative  object-cover rounded-t-2xl w-full h-full " src="<?= get_field('company_logo')['url']  ?>" />
                                    <div class=" grid place-items-center absolute top-0 left-0 right-0 bottom-0 opacity-70 bg-black w-full h-full text-neutral-50 rounded-t-2xl"><?php the_title() ?> </div>
                                </div>
                            </div>
                            <div class="h-[125px] px-4 mt-6 text-center text-neutral-50">
                                <?= get_field("description_of_work") ?>
                            </div>
                            <div>
                                <p class="text-neutral-50">Worked on Project at <a href="<?= get_field('worked_on_at_website_url')  ?>" target="_blank" class="text-light-primary"><?= get_field('worked_on_at')  ?></a>
                                <p>
                            </div>
                            <div class="w-full p-4 ">
                                <a href="<?= get_field('website_url') ?>"> <button class="w-full text-neutral-50 h-14 border font-bold text-xl bg-light-secondry rounded-2xl">Visit Website</button></a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
<?php
}
