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

        <?php
        session_start();

        // Check if the user is visiting for the first time
        if (!isset($_SESSION['first_visit'])) {
            $_SESSION['first_visit'] = true;
            $firstVisit = true;
        } else {
            $firstVisit = false;
        }
        ?>



        <!-- The Modal -->
        <div id="newsletterModal" class="news-modal hidden">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 modal-content">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Subscribe to our Newsletter
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="newsletterModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Stay updated with our latest news and offers. Subscribe to our newsletter!
                        </p>
                        <form id="newsletterForm">
                            <input type="email" id="email" name="email" placeholder="Your email" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <button type="submit" id="subscribeBtn"
                                class="sign-up-button mt-4 text-white ">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-alt">
            <section class="hero-wrapper w-full h-screen text-center overflow-hidden"
                style="background-image: url('https://images.pexels.com/photos/1687147/pexels-photo-1687147.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'), linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.5)); background-size: cover; background-position: bottom; background-blend-mode: overlay;">
                <h1 class="hero-header pt-80 mb-4 text-5xl font-extrabold leading-none tracking-tight md:text-5xl lg:text-7xl">
                    Your adventure starts here</h1>
                <p class="hero-subheader mb-6 text-lg font-bold lg:text-xl sm:px-16 xl:px-48 ">
                    Explore the world's largest car sharing marketplace</p>

                <!-- RESERVATION FORM -->
                <div class="reservation-form max-w-7xl mx-auto mt-[26vh]">
                    <div class="reservation backdrop-blur-md p-8 rounded-lg md:flex text-sm">
                        <div class="md:w-1/5">
                            <label for="location" class="block font-bold mb-2">Location</label>
                            <select class="block px-4 py-3 rounded-md text-black w-full" required>
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
                                class="w-full px-4 text-black py-2 border border-gray-400 rounded-md focus:outline-none focus:border-blue-500"
                                required>
                        </div>

                        <div class="md:w-1/5 md:ml-6">
                            <label for="returnDate" class="block font-bold mb-2">Return Date</label>
                            <input type="date" id="returnDate" name="returnDate"
                                class="w-full px-4 py-2 text-black border border-gray-400 rounded-md focus:outline-none focus:border-blue-500"
                                required>
                        </div>

                        <div class=" md:w-1/5 ml-6">
                            <div class="price-range-slider">
                                <p class="mb-4">Price range</p>
                                <div id="slider-range" class="range-bar"></div>
                                <p class="range-value">
                                    <input type="text" id="amount" readonly>
                                </p>
                            </div>
                        </div>
                        <div class=" text-center md:w-1/5 ">
                            <a class="reservation-button" href="<?= BASE_URL ?>/car/index">
                                <button id="find-car" type="submit">
                                    Find a car
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- RESERVATION FORM ENDS -->
            </section>


            <section class="discover-why-wrapper">
                <h1>Discover how we are redefining car rentals</h1>
                <div class="discover-cards">
                    <div class="card">
                        <h2 class="counter">0+</h2>
                        <h4>YEARS OF EXPERTISE</h4>
                        <p>in Vehicle Rentals</p>
                    </div>


                    <div class="card">
                        <h2>5M+</h2>
                        <h4>HAPPY CUSTOMERS</h4>
                        <p>on the Road</p>
                    </div>
                    <div class="card">
                        <h2>0</h2>
                        <h4>EMISSIONS FLEET</h4>
                        <p>for a Greener Tomorrow</p>
                    </div>
                </div>
            </section>

            <section class="our-story-wrapper">
                <video autoplay muted loop 2 playsinline>
                    <source src="<?= BASE_URL ?>/www/video/lambo.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="content p-8 rounded-lg max-w-5xl mx-auto my-0">
                    <h1>Inspired by sustainability</h1>
                    <p>Inspired to create a new benchmark for Class 4-5 trucks, we are proud to introduce a purely electric
                        truck that is safe, reliable and efficient.</p>
                    <button>Discover Our Story</button>
                </div>
            </section>

            <!-- CATEGORIES -->
            <section class="car-categories-wrapper bg-white">
                <div class="car-categories mx-auto">
                    <h2 class="text-3xl font-bold text-center text-black mb-6">Choose your style</h2>
                    <div class="cat-cards">
                        <div class="cat-card  p-6">
                            <img src="<?= BASE_URL ?>/www/img/cars/economy.png" alt="Car Category 1">
                            <div class="content">
                                <h3>Economy</h3>
                                <p>Explore our wide range of sedans for a comfortable and luxurious
                                    driving experience.</p>
                                <a href="<?= BASE_URL ?>/car/search?query-terms=economy">View
                                    Cars</a>
                            </div>
                            <div class="description">
                                <div><img src="<?= BASE_URL ?>/www/img/icons/air-conditioner.png" alt="">
                                    <p>Air Conditioning</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car.png" alt="">
                                    <p>Automatic</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car-door.png" alt="">
                                    <p>4 Doors</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car-seat.png" alt="">
                                    <p>5 Seats</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/luggage.png" alt="">
                                    <p>1 Large Bag</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/suitcase.png" alt="">
                                    <p>2 Small Bags</p>
                                </div>
                            </div>
                        </div>
                        <div class="cat-card  p-4">
                            <img src="<?= BASE_URL ?>/www/img/cars/luxury.png" alt="Car Category 2">
                            <div class="content">
                                <h3>Luxury</h3>
                                <p>Choose from our SUVs collection for a spacious and versatile
                                    driving experience.</p>
                                <a href="<?= BASE_URL ?>/car/search?query-terms=luxury">View
                                    Cars</a>
                            </div>
                            <div class="description">
                                <div><img src="<?= BASE_URL ?>/www/img/icons/air-conditioner.png" alt="">
                                    <p>Air Conditioning</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car.png" alt="">
                                    <p>Automatic</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car-door.png" alt="">
                                    <p>4 Doors</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car-seat.png" alt="">
                                    <p>5 Seats</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/luggage.png" alt="">
                                    <p>2 Large Bags</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/suitcase.png" alt="">
                                    <p>2 Small Bags</p>
                                </div>
                            </div>
                        </div>
                        <div class="cat-card  p-4">
                            <img src="<?= BASE_URL ?>/www/img/cars/kia.png" alt="Car Category 3">
                            <div class="content">
                                <h3>Compact</h3>
                                <p>Experience the thrill of driving with our convertible cars, perfect
                                    for a stylish and open-air ride.</p>
                                <a href="<?= BASE_URL ?>/car/search?query-terms=compact">View
                                    Cars</a>
                            </div>
                            <div class="description">
                                <div><img src="<?= BASE_URL ?>/www/img/icons/air-conditioner.png" alt="">
                                    <p>Air Conditioning</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car.png" alt="">
                                    <p>Automatic</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car-door.png" alt="">
                                    <p>4 Doors</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car-seat.png" alt="">
                                    <p>5 Seats</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/luggage.png" alt="">
                                    <p>1 Large Bag</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/suitcase.png" alt="">
                                    <p>2 Small Bags</p>
                                </div>
                            </div>
                        </div>
                        <div class="cat-card  p-4">
                            <img src="<?= BASE_URL ?>/www/img/cars/ram-2.png" alt="Car Category 4">
                            <div class="content">
                                <h3>Pick-up</h3>
                                <p>Explore our wide range of sedans for a comfortable and luxurious
                                    driving experience.</p>
                                <a href="<?= BASE_URL ?>/car/search?query-terms=pickup">View
                                    Cars</a>
                            </div>
                            <div class="description">
                                <div><img src="<?= BASE_URL ?>/www/img/icons/air-conditioner.png" alt="">
                                    <p>Air Conditioning</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car.png" alt="">
                                    <p>Automatic</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car-door.png" alt="">
                                    <p>4 Doors</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car-seat.png" alt="">
                                    <p>5 Seats</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/luggage.png" alt="">
                                    <p>5 Large Bags</p>
                                </div>
                            </div>
                        </div>
                        <div class="cat-card  p-4">
                            <img src="<?= BASE_URL ?>/www/img/cars/acura-cross.png" alt="Car Category 5">
                            <div class="content">
                                <h3>SUV</h3>
                                <p>Choose from our SUVs collection for a spacious and versatile
                                    driving experience.</p>
                                <a href="<?= BASE_URL ?>/car/search?query-terms=suv">View
                                    Cars</a>
                            </div>
                            <div class="description">
                                <div><img src="<?= BASE_URL ?>/www/img/icons/air-conditioner.png" alt="">
                                    <p>Air Conditioning</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car.png" alt="">
                                    <p>Automatic</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car-door.png" alt="">
                                    <p>4 Doors</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car-seat.png" alt="">
                                    <p>5 Seats</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/luggage.png" alt="">
                                    <p>4 Large Bags</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/suitcase.png" alt="">
                                    <p>1 Small Bag</p>
                                </div>

                            </div>
                        </div>
                        <div class="cat-card  p-4">
                            <img src="<?= BASE_URL ?>/www/img/cars/convertible.png" alt="Car Category 6" alt="Car Category 3">
                            <div class="content">
                                <h3>Convertible</h3>
                                <p>Experience the thrill of driving with our convertible cars, perfect
                                    for a stylish and open-air ride.</p>
                                <a href="<?= BASE_URL ?>/car/search?query-terms=convertible">View
                                    Cars</a>
                            </div>
                            <div class="description">
                                <div><img src="<?= BASE_URL ?>/www/img/icons/air-conditioner.png" alt="">
                                    <p>Air Conditioning</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car.png" alt="">
                                    <p>Automatic</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car-door.png" alt="">
                                    <p>2 Doors</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/car-seat.png" alt="">
                                    <p>4 Seats</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/luggage.png" alt="">
                                    <p>1 Large Bag</p>
                                </div>
                                <div><img src="<?= BASE_URL ?>/www/img/icons/suitcase.png" alt="">
                                    <p>1 Small Bag</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- How it works  -->
        <section class="how-wrapper py-12">
            <div class="how-cards mx-auto px-4">
                <h2 class="text-3xl font-bold text-center">How It Works</h2>
                <div class="card-wrapper text-white items-start py-4">
                    <!-- Step 1: Choose a car -->
                    <div class="card px-4 mb-8">
                        <div class="items-center mb-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 ml-4 object-cover rounded-full"
                                    src="<?= BASE_URL ?>/www/img/icons/electric-car.png" alt="Step 1: Choose a car">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold ">Step 1: Choose a car</h3>
                                <p>Browse our wide selection of rental cars and choose the one
                                    that suits your needs.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Step 2: Make a reservation -->
                    <div class="card px-4 mb-8">
                        <div class="items-center mb-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 ml-2 object-cover rounded-full"
                                    src="<?= BASE_URL ?>/www/img/icons/gps.png" alt="Step 2: Make a reservation">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold ">Step 2: Make a reservation</h3>
                                <p>Book your car online with our easy-to-use reservation system.
                                    Choose your dates, location, and options.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Step 3: Pick up your car -->
                    <div class="card px-4 mb-8">
                        <div class="items-center mb-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 ml-4 object-cover rounded-full"
                                    src="<?= BASE_URL ?>/www/img/icons/car-key.png" alt="Step 3: Pick up your car">
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold ">Step 3: Pick up your car</h3>
                                <p>Visit our convenient location to pick up your reserved car. Our
                                    friendly staff will assist you with the paperwork.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- GSAP and JQuery -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/ScrollTrigger.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/SplitText.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

        <script>document.addEventListener('DOMContentLoaded', function () {
                const modal = document.getElementById('newsletterModal');
                const closeModalBtns = document.querySelectorAll('[data-modal-hide]');

                // Function to open the modal
                function openModal() {
                    modal.classList.remove('hidden');
                    modal.style.display = 'flex';
                }

                // Function to close the modal
                function closeModal() {
                    modal.classList.add('hidden');
                    modal.style.display = 'none';
                }

                // Add event listeners to close modal buttons
                closeModalBtns.forEach(button => {
                    button.addEventListener('click', closeModal);
                });

                // Close the modal when clicking outside of the modal content
                window.addEventListener('click', function (event) {
                    if (event.target === modal) {
                        closeModal();
                    }
                });

                // Show the modal after 3 seconds if it's the user's first visit
                <?php if ($firstVisit): ?>
                    setTimeout(openModal, 3000);
                <?php endif; ?>
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function () {
                $('.cat-car').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    dots: true,
                    arrows: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });

            // -----JS for Hero Price Range slider-----

            $(function () {
                $("#slider-range").slider({
                    range: true,
                    min: 50,
                    max: 250,
                    values: [50, 250],
                    slide: function (event, ui) {
                        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                    }
                });
                $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                    " - $" + $("#slider-range").slider("values", 1));

                $("#find-car").click(function () {
                    var minPrice = $("#slider-range").slider("values", 0);
                    var maxPrice = $("#slider-range").slider("values", 1);

                    $.ajax({
                        url: 'find_car.php',
                        type: 'POST',
                        data: { min_price: minPrice, max_price: maxPrice },
                        success: function (response) {
                            $("#car-results").html(response);
                        }
                    });
                });
            });
        </script>


        <!-- Discover why counter -->
        <script>
            gsap.registerPlugin(ScrollTrigger);

            gsap.to(".counter", {
                innerText: 40,
                scrollTrigger: {
                    trigger: ".card",
                    start: "top 75%",
                    end: "top 50%",
                    scrub: false,
                },
                duration: 4,
                ease: "power1.inOut",
                snap: { innerText: 1 },
                onUpdate: function () {
                    const counterElement = this.targets()[0];
                    counterElement.innerText = Math.ceil(counterElement.innerText) + "+";
                }
            });


            // gsap.registerPlugin(SplitText);

            // document.addEventListener("DOMContentLoaded", function () {
            //     var splitText = new SplitText(".hero-header", { type: "words, chars" });
            //     var chars = splitText.chars; // an array of all the divs that wrap each character

            //     gsap.from(chars, {
            //         duration: 1.5,
            //         opacity: 0,
            //         y: 50,
            //         stagger: 0.05,
            //         ease: "power3.out",
            //         onComplete: function () {
            //             gsap.to(chars, { y: 0, opacity: 1, stagger: 0.05 });
            //         }
            //     });
            // });
        </script>





        <?php
        //display page footer
        parent::displayFooter();
    }

}