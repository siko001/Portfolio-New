<footer class="py-12  px-8 md:px-16 lg:px-24">
    <div class="flex flex-col justify-center items-center gap-10">
        <div>
            <div class="flex items-baseline">
                <lottie-player src="https://lottie.host/5940e458-99a4-4db2-b893-f52ca169dee4/tom5KZgx5K.json" background="transparent" speed="1" class="w-20 h-20" direction="1" playMode="normal" autoplay></lottie-player>
                <span class="relative -top-4 -left-4 text-6xl tracking-wide name font-text"> eil </span>
            </div>
        </div>
        <div>
            <div class="text-xl  font-medium ">
                <?php wp_nav_menu(array(
                    'theme_location' => 'navbar_menu',
                    'items_wrap' => '<ul id="%1$s" class="flex gap-8 try">%3$s</ul>',
                )) ?>

            </div>
        </div>
        <div class="flex">

            <a href="https://facebook.com/neilfourtwenty" target="_blank"> <lottie-player src="https://lottie.host/ba5425c8-b959-45a1-9189-fd9df3702a3d/WaTpeVbPBZ.json" background="transparent" speed="1" class="w-16 h-16" loop autoplay></lottie-player></a>


            <a href="https://github.com/siko001" target="_blank"> <lottie-player src="https://lottie.host/92dac046-f4cb-41d6-88b8-f5e3bad2c458/U8w4s3z4ko.json" background="transparent" speed="1" class="w-16 h-16 scale-75" loop autoplay></lottie-player></a>

            <a href="https://linkedin.com/in/neil-mallia-52bb0424b" target="_blank"> <lottie-player src="https://lottie.host/3921854c-8eae-47b0-a12a-8b02d06cadd5/huhvS7MaOe.json" background="transparent" speed="1" class="w-16 h-16" loop autoplay></lottie-player></a>
        </div>
        <div>All Rights Reserved <span class="text-light-primary">Neil Mallia</span> <span class="text-xs"><?= date("Y") ?></span></div>

    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>