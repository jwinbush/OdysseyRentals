<?php
/**
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

            // Get the price slider element
            var priceSlider = document.getElementById('priceSlider');

            // Get the price display element
            var priceDisplay = document.getElementById('priceDisplay');

            // Add event listener for the slider's input event
            priceSlider.addEventListener('input', function() {
                // Get the current value of the slider
                var price = priceSlider.value;

                // Update the price display with the current value
                priceDisplay.textContent = 'Price: $' + price;
            });

        </script>

        <div>
            <div class="w-full h-screen text-center"
                 style="background-image: url('https://hips.hearstapps.com/hmg-prod/images/polestar-2-001-1551208847.jpg'); background-size: cover; background-position: bottom;">
                <h1 class="pt-80 mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
                    Your adventure starts here</h1>
                <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                    Explore the world's largest car sharing marketplace</p>
<!--                <a href="#"-->
<!--                   class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-gradient-to-r from-blue-500 to-cyan-400 rounded-lg focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">-->
<!--                    Learn more-->
<!--                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"-->
<!--                         xmlns="http://www.w3.org/2000/svg">-->
<!--                        <path fill-rule="evenodd"-->
<!--                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"-->
<!--                              clip-rule="evenodd"></path>-->
<!--                    </svg>-->
<!--                </a>-->

                <!-- RESERVATION FORM -->
                <div class="max-w-7xl mx-auto mt-64">
                    <div class="backdrop-blur-md p-8 bg-white/20 rounded-lg shadow-md md:flex text-sm">
                        <div class="md:w-1/5">
                            <label for="location" class="block font-bold mb-2">Location</label>
                            <select class="block px-4 py-2 rounded-md text-black w-full" required>
                                <option>7800 Col. H. Weir Cook Memorial Dr, Indianapolis, IN 46241</option>
                                <option>10000 W Balmoral Ave, Chicago, IL 60666</option>
                                <option>Queens, NY 11430</option>
                                <option>3225 N Harbor Dr, San Diego, CA 92101</option>
                                <option>1 Jeff Fuqua Blvd, Orlando, FL 32827</option>
                                <option>2400 Aviation Dr, DFW Airport, TX 75261</option>
                            </select>
                        </div>

                        <div class="md:w-1/5 md:ml-6">
                            <label for="pickupDate" class="block font-bold mb-2">Pickup Date</label>
                            <input type="date" id="pickupDate" name="pickupDate"
                                   class="w-full px-4 py-2 border border-gray-400 rounded-md focus:outline-none focus:border-blue-500" required>
                        </div>

                        <div class="md:w-1/5 md:ml-6">
                            <label for="returnDate" class="block font-bold mb-2">Return Date</label>
                            <input type="date" id="returnDate" name="returnDate"
                                   class="w-full px-4 py-2 border border-gray-400 rounded-md focus:outline-none focus:border-blue-500" required>
                        </div>

                        <div class=" md:w-1/5 ml-6">
                            <?php
                            // Set the minimum and maximum values for the price range dynamically
                            $minPrice = 45;
                            $maxPrice = 90;
                            ?>
                            <label for="priceRange" class="block font-bold mb-2">Price Range</label>
                            <input type="range" id="priceRange" name="priceRange" class="slider w-full"
                                   min="<?php echo $minPrice; ?>" max="<?php echo $maxPrice; ?>" step="1">
                            <div class="flex justify-between mt-4">
                                <span>$<?php echo $minPrice; ?></span>
                                <span>$<?php echo $maxPrice; ?></span>
                            </div>
                        </div>
                        <div class="mt-6 text-center md:w-1/5 ">
                            <a href="<?= BASE_URL ?>/car/index">
                            <button type="submit"
                                    class="bg-gradient-to-r from-blue-500 to-cyan-400 text-white px-6 py-2 rounded-md hover:bg-blue-600 transition duration-200">
                                Find a car
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- RESERVATION FORM ENDS -->
            </div>

            <!-- CATEGORIES -->
            <div class="bg-white py-10 h-full">
                <div class="container mx-auto">
                    <h2 class="text-3xl font-bold text-center text-black mb-6">Car Categories</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        <div class="bg-white shadow-md p-4">
                            <img src="<?= BASE_URL ?>/www/img/cars/sedan.png" alt="Car Category 1"
                                 class="w-full h-100 object-cover mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Economy</h3>
                            <p class="text-gray-600">Explore our wide range of sedans for a comfortable and luxurious
                                driving experience.</p>
                            <a href="<?= BASE_URL ?>/car/search?query-terms=economy"
                               class="mt-4 inline-block bg-gradient-to-r from-blue-500 to-cyan-400 text-white font-semibold py-2 px-4 rounded">View
                                Cars</a>
                        </div>
                        <div class="bg-white shadow-md p-4">
                            <img src="<?= BASE_URL ?>/www/img/cars/coupe.png" alt="Car Category 2"
                                 class="w-full h-100 object-cover mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Luxury</h3>
                            <p class="text-gray-600">Choose from our SUVs collection for a spacious and versatile
                                driving experience.</p>
                            <a href="<?= BASE_URL ?>/car/search?query-terms=luxury"
                               class="mt-4 inline-block bg-gradient-to-r from-blue-500 to-cyan-400 text-white font-semibold py-2 px-4 rounded">View
                                Cars</a>
                        </div>
                        <div class="bg-white shadow-md p-4">
                            <img src="<?= BASE_URL ?>/www/img/cars/compact.png" alt="Car Category 3"
                                 class="w-full h-100 object-cover mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Compact</h3>
                            <p class="text-gray-600">Experience the thrill of driving with our convertible cars, perfect
                                for a stylish and open-air ride.</p>
                            <a href="<?= BASE_URL ?>/car/search?query-terms=compact"
                               class="mt-4 inline-block bg-gradient-to-r from-blue-500 to-cyan-400 text-white font-semibold py-2 px-4 rounded">View
                                Cars</a>
                        </div>
                        <div class="bg-white shadow-md p-4">
                            <img src="<?= BASE_URL ?>/www/img/cars/pickup.png" alt="Car Category 1"
                                 class="w-full h-100 object-cover mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Pick-up</h3>
                            <p class="text-gray-600">Explore our wide range of sedans for a comfortable and luxurious
                                driving experience.</p>
                            <a href="<?= BASE_URL ?>/car/search?query-terms=pickup"
                               class="mt-4 inline-block bg-gradient-to-r from-blue-500 to-cyan-400 text-white font-semibold py-2 px-4 rounded">View
                                Cars</a>
                        </div>
                        <div class="bg-white shadow-md p-4">
                            <img src="<?= BASE_URL ?>/www/img/cars/suv.png" alt="Car Category 2"
                                 class="w-full h-100 object-cover mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">SUVs</h3>
                            <p class="text-gray-600">Choose from our SUVs collection for a spacious and versatile
                                driving experience.</p>
                            <a href="<?= BASE_URL ?>/car/search?query-terms=suv"
                               class="mt-4 inline-block bg-gradient-to-r from-blue-500 to-cyan-400 text-white font-semibold py-2 px-4 rounded">View
                                Cars</a>
                        </div>
                        <div class="bg-white shadow-md p-4">
                            <img src="https://in-info-web4.informatics.iupui.edu/~jwinbush/n413_site2/images/mercedes.png"
                                 alt="Car Category 3" class="w-full h-100 object-cover mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Convertibles</h3>
                            <p class="text-gray-600">Experience the thrill of driving with our convertible cars, perfect
                                for a stylish and open-air ride.</p>
                            <a href="<?= BASE_URL ?>/car/search?query-terms=convertible"
                               class="mt-4 inline-block bg-gradient-to-r from-blue-500 to-cyan-400 text-white font-semibold py-2 px-4 rounded">View
                                Cars</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="bg-white py-12">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-semibold text-black text-center mb-8">How It Works</h2>
                <div class="flex flex-wrap items-center">
                    <!-- Step 1: Choose a car -->
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 object-cover rounded-full" src="https://cdns.iconmonstr.com/wp-content/releases/preview/2016/96/iconmonstr-car-2.png"
                                     alt="Step 1: Choose a car">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">Step 1: Choose a car</h3>
                                <p class="text-gray-600">Browse our wide selection of rental cars and choose the one
                                    that suits your needs.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Step 2: Make a reservation -->
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 object-cover rounded-full" src="https://cdns.iconmonstr.com/wp-content/releases/preview/2016/96/iconmonstr-car-20.png"
                                     alt="Step 2: Make a reservation">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">Step 2: Make a reservation</h3>
                                <p class="text-gray-600">Book your car online with our easy-to-use reservation system.
                                    Choose your dates, location, and options.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Step 3: Pick up your car -->
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 object-cover rounded-full" src="https://cdns.iconmonstr.com/wp-content/releases/preview/2016/240/iconmonstr-car-16.png"
                                     alt="Step 3: Pick up your car">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">Step 3: Pick up your car</h3>
                                <p class="text-gray-600">Visit our convenient location to pick up your reserved car. Our
                                    friendly staff will assist you with the paperwork.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <?php
        //display page footer
        parent::displayFooter();
    }

}