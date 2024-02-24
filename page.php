<?php
get_header();

?>
<div class="w-full my-20 flex flex-col items-center ">


    <h1 class="text-6xl text-light-primary flex items-center     gap-2 mb-20">
        <?php the_title() ?><div class="glowing-line relative top-1"></div>
    </h1>
    <?php the_content(); ?>
</div>


<?php
get_footer();
