<section class='relative  grid place-items-center py-16 md:py-32'>
    <!-- Professional-->
    <div class=" flex flex-col md:flex-row w-full justify-center z-10 gap-8 md:gap-12 items-center md:pl-8 pb-9">
        <div data-hero-image class="invisible h-36 w-60 md:h-52 md:w-52 md:rounded-full">
            <img src="<?= get_theme_file_uri() . "/assets/pictures/me1.jpeg" ?>" class="w-full h-full rounded-full object-cover scale-125" alt="" />
        </div>
        <div data-hero-text class="invisible font-heading pt-4 md:pt-0 flex  md:gap-4 flex-col text-center md:text-left">
            <h1 class="text-6xl md:text-7xl lg:text-8xl">Neil Mallia</h1>
            <h2 class="text-4xl md:text-5xl lg:text-6xl"> <span class="text-light-primary">Fullstack Developer</span></h2>
            <h3 class="text-3xl md:text-3xl lg:text-4xl mt-2 md:mt-0">WordPress - LaraveL - React</h3>
        </div>
    </div>
    <!-- Fun -->
    <div class="absolute top-0 left-0 mask   grid w-full place-items-center overflow-hidden md:overflow-auto " style="mask-image: url('<?= get_theme_file_uri() . "/assets/svg/mask.svg"                                                                                                                       ?>')">
        <div class="flex flex-col md:flex-row w-full justify-center pt-16 md:pt-28 md:ml-6 lg:ml-24 gap-8 md:gap-12 items-center ">
            <div class="relative md:top-5 md:left-3 h-36 w-60 md:h-56 md:w-56 md:rounded-full">
                <img src="<?= get_theme_file_uri() . "/assets/pictures/me2.jpg" ?>" class="w-full h-full  rounded-full object-cover scale-125" alt="" />
            </div>
            <div class="font-heading pt-4 flex flex-col md:gap-4 text-center md:text-left relative md:left-[0.6rem] md:-top-1 lg:top-0 lg:left-[0.9rem]">
                <h1 class="text-6xl md:text-7xl lg:text-8xl">Neil Mallia</h1>
                <h2 class="text-4xl lg:text-6xl "> <span class="text-red-500 text-nowrap">Adventurous Extraordinaire</span></h2>
                <h3 class="text-3xl md:text-3xl lg:text-4xl  md:mt-0 lg:mt-0">Scuba-Diver - Hiker - Coder - Chef</h3>
            </div>
        </div>
    </div>
    <div id='logo-container' class="absolute mt-10  w-full h-[350px] z-50">
    </div>
</section>