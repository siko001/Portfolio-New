<nav id="nav-contianer"  class=" flex  border-b-2  justify-between items-center w-full px-4 md:px-16 lg:px-24 overflow-hidden py-6 lg:py-3 z-50">
    <div class="flex items-baseline">
        <lottie-player src="https://lottie.host/5940e458-99a4-4db2-b893-f52ca169dee4/tom5KZgx5K.json" background="transparent" speed="1" class="w-20 h-20" direction="1" playMode="normal" autoplay></lottie-player>
        <span class="relative -top-4 -left-4 text-6xl tracking-wide name font-text"> eil </span>
    </div>
    <div class="text-xl relative z-[999] font-medium hidden lg:block ">
        <?php wp_nav_menu(array(
            'theme_location' => 'navbar_menu',
            'items_wrap' => '<ul id="%1$s" class="flex gap-8 try">%3$s</ul>',
        )) ?>

    </div>
    <div class=" block lg:hidden z-[999]">
        <lottie-player id="nav-player" src="https://lottie.host/10e78b11-a111-4583-bf27-31e718a454a9/FePmpMJXj6.json" background="transparent" speed="2" class="relative z-50 cursor-pointer h-20 w-20" direction="1" playMode="normal" loop></lottie-player>
    </div>
    <div class='flex  items-center '>
        <lottie-player id="theme-player" src="https://lottie.host/e0423871-30fe-407d-a61e-9d2c17ea98d4/frVlZDqGRg.json" loop mode="normal" class="cursor-pointer w-28 ">
        </lottie-player>
    </div>
</nav>




<!-- Mobile Menu -->
<nav data-mobile-nav class="z-[100] absolute text-4xl h-[1px] w-[1px] rounded-full bg-slate-600  left-[50%] top-[2.66rem] ">
</nav>
<div data-mobile-nav-container class="absolute hidden  place-items-center w-screen h-screen  text-3xl  top-0  font-medium z-[110]">
    <?php wp_nav_menu(array(
        'theme_location' => 'navbar_menu',
        'items_wrap' => '<ul data-mobile-nav-menu id="%1$s" class="flex flex-col text-center gap-10 mobile">%3$s</ul>',
    )) ?>
</div>