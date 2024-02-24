<section class=" border-y-2 px-8 md:px-16 lg:px-32 py-12    lg:py-24 text-center lg:text-left  overflow-hidden">
    <div class=" relative flex w-full justify-center items-center flex-col gap-10 ">
        <h2 data-st-heading class="font-heading text-6xl text-light-primary flex items-center gap-2 ">
            <div class="glowing-line relative -top-2"></div> About Me
        </h2>
        <div class="grid w-full  lg:grid-cols-2 justify-between  place-items-center md:mb-36 lg:mb-0">
            <div class="flex flex-col gap-8 items-center md:items-start">
                <p data-st-p1 class="text-lg pr-4"><?php echo esc_html(get_field('about_me_first_paragraph')) ? esc_html(get_field('about_me_first_paragraph')) : "" ?></p>

                <p data-st-p2 class="text-lg pr-4"><?php echo esc_html(get_field('about_me_second_paragraph')) ? esc_html(get_field('about_me_second_paragraph')) : "" ?></p>

                <h2 class="flex items-center gap-5 text-2xl max-w-[10ch] relative -left-10 md:left-0"><span class="text-light-primary text-8xl"><?php echo date('Y') - 2021; ?></span> Years of Experience</h2>
                <div data-st-contant class="flex gap-4 items-center ">
                    <h3 class="text-5xl">Contact Me</h3><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-light-primary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
            </div>
            <div data-st-lottie class="relative md:absolute lg:relative bottom-0 right-0 lg:left-0 lg:top-0">
                <lottie-player id="coding-lottie" src="https://lottie.host/3502c1a3-87d8-4138-9944-b4b6f93001f8/edHotQ06QP.json" background="transparent" speed="1" class="mt-5 lg:mt-0 w-[300px] h-[300px] lg:w-[450px] lg:h-[450px] " direction="1" playMode="normal" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
</section>


<!-- <div class="absolute md:-top-48 md:left-40 lg:left-0 lg:top-0"> -->