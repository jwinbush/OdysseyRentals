<?php
/**
 * Author: Steven Casada
 * Date: 11/30/2022
 * File: home_index.class.php
 * Description:
 */

class HomeIndex extends IndexView
{

    public function display()
    {
        //display page header
        parent::displayHeader("Car Rentals from $45/day - Search for Rental Cars on Odyssey Rentals");
        ?>

        <!--jQuery Section-->
        <script type="text/javascript">
            $("button").click(function () {
                $("#accordion-body-1").slideUp("slow", function () {
                    // Animation complete.
                });
            });
        </script>


        <div>
            <div class="w-full h-screen text-center"
                 style="background-image: url('https://hips.hearstapps.com/hmg-prod/images/polestar-2-001-1551208847.jpg'); background-size: cover; background-position: bottom;">
                <h1 class="pt-80 mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
                    Accelerating the Future</h1>
                <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                    Explore the world's largest car sharing marketplace</p>
                <a href="#"
                   class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Learn more
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>

        </div>

        <!-- CATEGORIES -->
        <section class="">
            <h2 class="section__title">Categories for you</h2>
            <div class="grid grid-cols-3 gap-4 w-full h-screen justify-center">
                <div>
                    <a href="<?= BASE_URL ?>/car/search?query-terms=car">
                        <img src="<?= BASE_URL ?>/www/img/cars/coupe.png" alt="">
                    </a>
                    <h3 class="category__title">Coupe</h3>
                    <p class="category__description">Boasting a sizable dose of luxury.</p>
                </div>
                <div class="category__data">
                    <img src="<?= BASE_URL ?>/www/img/cars/sedan.png" alt="" >
                    <h3 class="category__title ">Sedan</h3>
                    <p class="category__description">Sometimes known as a saloon in British English.</p>
                </div>
                <div class="category__data">
                    <img src="<?= BASE_URL ?>/www/img/cars/compact.png" alt="">
                    <h3 class="category__title">Compact</h3>
                    <p class="category__description">If you don't need too much space, this is the right car for
                        you.</p>
                </div>
                <div class="category__data">
                    <a href="<?= BASE_URL ?>/car/search?query-terms=car">
                        <img src="<?= BASE_URL ?>/www/img/cars/suv.png" alt="">
                    </a>
                    <h3 class="category__title">SUV</h3>
                    <p class="category__description">Boasting a sizable dose of luxury.</p>
                </div>
                <div class="category__data">
                    <img src="<?= BASE_URL ?>/www/img/cars/Van.png" alt="">
                    <h3 class="category__title ">Van</h3>
                    <p class="category__description">You look at the scariest pumpkins there is.</p>
                </div>
                <div class="category__data">
                    <img src="<?= BASE_URL ?>/www/img/cars/pickup.png" alt="">
                    <h3 class="category__title">Pickup</h3>
                    <p class="category__description">Pick the most stylish witch hats out there.</p>
                </div>
            </div>
        </section>


        <!-- ABOUT -->
        <section class="section about" id="about">
            <div class="about__container">
                <div class="about__data text-center">
                    <h2 class=" ">About Odyssey <br> Rentals </h2>

                    <p class="mb-3 font-light text-gray-500 dark:text-gray-400">Track work across the enterprise through
                        an open, collaborative platform. Link issues across Jira and ingest data from other software
                        development tools, so your IT support and operations teams have richer contextual information to
                        rapidly respond to requests, incidents, and changes.</p>
                    <p class="font-light text-gray-500 dark:text-gray-400">Deliver great service experiences fast -
                        without the complexity of traditional ITSM solutions.Accelerate critical development work,
                        eliminate toil, and deploy changes with ease, with a complete audit trail for every change.</p>

                    <!--                    <p class="about__description">-->
                    <!--                        Odyssey Rentals is an ongoing success story.-->
                    <!--                        Our guiding principles, and humble beginning, revolve around personal honesty and integrity.-->
                    <!--                        We believe in strengthening our communities one neighborhood at a time, serving our customers as if they were our family, and rewarding hard work.-->
                    <!--                        These things are as true today as they were when we were founded in 2022.-->
                    <!--                        Today, our massive network means Enterprise is the largest transportation solutions provider.-->
                    <!--                        We offer car and truck rentals, as well as car sharing and car sales. We're there when you need us with over 8,000 locations worldwide.-->
                    <!--                        We take an active role in sustainability, not only because it’s smart for our business, but because we believe in making the world a better place for future generations.-->
                    <!--                        Because of our size, we are in a unique position to foster innovation, advance research and test market-driven solutions. </p>-->

                </div>

            </div>
        </section>


<!--        <div id="accordion-color" data-accordion="collapse"-->
<!--             data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">-->
<!--            <h2 id="accordion-heading-1">-->
<!--                <button type="button"-->
<!--                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"-->
<!--                        data-accordion-target="#accordion-color-body-1" aria-expanded="true"-->
<!--                        aria-controls="accordion-color-body-1">-->
<!--                    <span>What is Flowbite?</span>-->
<!--                    <svg id="accordion-1"data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"-->
<!--                         xmlns="http://www.w3.org/2000/svg">-->
<!--                        <path fill-rule="evenodd"-->
<!--                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"-->
<!--                              clip-rule="evenodd"></path>-->
<!--                    </svg>-->
<!--                </button>-->
<!--            </h2>-->
<!--            <div id="accordion-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">-->
<!--                <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">-->
<!--                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive-->
<!--                        components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and-->
<!--                        more.</p>-->
<!--                    <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a-->
<!--                                href="/docs/getting-started/introduction/"-->
<!--                                class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start-->
<!--                        developing websites even faster with components on top of Tailwind CSS.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <h2 id="accordion-heading-2">-->
<!--                <button type="button"-->
<!--                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"-->
<!--                        data-accordion-target="#accordion-color-body-2" aria-expanded="false"-->
<!--                        aria-controls="accordion-color-body-2">-->
<!--                    <span>Is there a Figma file available?</span>-->
<!--                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"-->
<!--                         xmlns="http://www.w3.org/2000/svg">-->
<!--                        <path fill-rule="evenodd"-->
<!--                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"-->
<!--                              clip-rule="evenodd"></path>-->
<!--                    </svg>-->
<!--                </button>-->
<!--            </h2>-->
<!--            <div id="accordion-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">-->
<!--                <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">-->
<!--                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using-->
<!--                        the Figma software so everything you see in the library has a design equivalent in our Figma-->
<!--                        file.</p>-->
<!--                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"-->
<!--                                                                                 class="text-blue-600 dark:text-blue-500 hover:underline">Figma-->
<!--                            design system</a> based on the utility classes from Tailwind CSS and components from-->
<!--                        Flowbite.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <h2 id="accordion-heading-3">-->
<!--                <button type="button"-->
<!--                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800"-->
<!--                        data-accordion-target="#accordion-color-body-3" aria-expanded="false"-->
<!--                        aria-controls="accordion-color-body-3">-->
<!--                    <span>What are the differences between Flowbite and Tailwind UI?</span>-->
<!--                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"-->
<!--                         xmlns="http://www.w3.org/2000/svg">-->
<!--                        <path fill-rule="evenodd"-->
<!--                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"-->
<!--                              clip-rule="evenodd"></path>-->
<!--                    </svg>-->
<!--                </button>-->
<!--            </h2>-->
<!--            <div id="accordion-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">-->
<!--                <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">-->
<!--                    <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components-->
<!--                        from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.-->
<!--                        Another difference is that Flowbite relies on smaller and standalone components, whereas-->
<!--                        Tailwind UI offers sections of pages.</p>-->
<!--                    <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,-->
<!--                        Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the-->
<!--                        best of two worlds.</p>-->
<!--                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>-->
<!--                    <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">-->
<!--                        <li><a href="https://flowbite.com/pro/"-->
<!--                               class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>-->
<!--                        <li><a href="https://tailwindui.com/" rel="nofollow"-->
<!--                               class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div id="default-carousel" class="relative" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="<?= BASE_URL ?>/www/img/whitespace.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="<?= BASE_URL ?>/www/img/whitespace.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="<?= BASE_URL ?>/www/img/whitespace.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="<?= BASE_URL ?>/www/img/whitespace.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="<?= BASE_URL ?>/www/img/whitespace.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
            </button>
        </div>



        <?php
        //display page footer
        parent::displayFooter();
    }

}