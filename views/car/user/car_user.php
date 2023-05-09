<?php
/**
 * Author: Steven Casada
 * Date: 12/8/2022
 * File: register_index.class.php
 * Description: Log in form
 */

class CarUser extends IndexView
{


    public function display($cars)
    {
        //display page header
        parent::displayHeader("Your Cart | Odyssey Rentals");
        ?>


        <style>
            #summary {
                background-color: #f6f6f6;
            }
        </style>


        <body class="bg-gray-100">
        <div class="mx-auto h-screen">

            <div class="flex shadow-md">
                <div class="w-3/4 bg-white px-10 py-24 h-screen">
                    <div class="flex justify-between border-b pb-8">
                        <h1 class="font-semibold text-2xl">Shopping Cart</h1>
                        <h2 class="font-semibold text-2xl">Reservations</h2>
                    </div>
                    <div class="flex mt-10 mb-5">
                        <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Details</h3>
                        <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Days</h3>
                        <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
                        <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                    </div>
                    <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                        <?php
                        if ($cars === 0) {
                            echo "<div class='text-black'>
                            <p class='text-5xl'>No cars were found.</p><br>
                            <a href='" . BASE_URL . "/car/index'>Look Around</a>
                        </div>";
                        } else {
                            foreach ($cars as  $car) {
                                $carId = $car->getCarId();
                                $make = $car->getMake();
                                $model = $car->getModel();
                                $year = $car->getYear();
                                $price = $car->getPrice();
                                $image = $car->getImage();


                                echo "<div class='flex w-2/5'>
                            <div class='w-22'>
                                <img class='h-22' src='$image' alt='$carId'>
                            </div>
                            <div class='flex flex-col justify-between ml-4 flex-grow'>
                                <span class='font-bold text-sm'>$make $model</span>
                                <a href='#' class='font-semibold hover:text-red-500 text-gray-500 text-xs'>Remove</a>
                            </div>
                        </div>
                        <div class='flex justify-center w-1/5'>
                            <svg class='fill-current text-gray-600 w-3' viewBox='0 0 448 512'><path d='M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z'/>
                            </svg>

                            <input class='mx-2 border text-center w-8' type='text' value='1'>

                            <svg class='fill-current text-gray-600 w-3' viewBox='0 0 448 512'>
                                <path d='M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z'/>
                            </svg>
                        </div>
                        <span class='text-center w-1/5 font-semibold text-sm'>$price</span>
                        <span class='text-center w-1/5 font-semibold text-sm'>$44.99</span>";


                            }}
                        ?>

                    </div>

                    <a href="<?= BASE_URL ?>/car/index" class="flex font-semibold text-black text-sm mt-10">

                        <svg class="fill-current mr-2 text-black w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                        Continue Shopping
                    </a>
                </div>

                <div id="summary" class="w-1/4 px-8 py-24">
                    <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
                    <div class="flex justify-between mt-10 mb-5">
                        <span class="font-semibold text-sm uppercase">1 Reservation</span>
                        <span class="font-semibold text-sm">$44.99</span>
                    </div>
                    <div>
                        <label class="font-medium inline-block mb-3 text-sm uppercase">Location</label>
                        <select class="block p-2 text-gray-600 w-full text-sm">
                            <option>7800 Col. H. Weir Cook Memorial Dr, Indianapolis, IN 46241</option>
                            <option>10000 W Balmoral Ave, Chicago, IL 60666</option>
                            <option>Queens, NY 11430</option>
                            <option>3225 N Harbor Dr, San Diego, CA 92101</option>
                            <option>1 Jeff Fuqua Blvd, Orlando, FL 32827</option>
                            <option>2400 Aviation Dr, DFW Airport, TX 75261</option>
                        </select>
                    </div>
                    <div class="py-10">
                        <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Promo Code</label>
                        <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full">
                    </div>
                    <button class="bg-black px-5 py-2 text-sm text-white uppercase">Apply</button>
                    <div class="border-t mt-8">
                        <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                            <span>Total cost</span>
                            <span>$44.99</span>
                        </div>
                        <a href="<?= BASE_URL ?>../../../index.php"><button class="bg-gradient-to-r from-blue-500 to-cyan-400 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button></a>
                    </div>
                </div>

            </div>
        </div>
        </body>
<?php
        if ($cars === 0) {
        echo "<div class='h-screen'>
        <p class='text-center'>No flights were found.</p><br>
        <a class='text-grey-500' href='" . BASE_URL . "car/index'>Find Cars</a>
    </div>";
        } else {

        ?>

        <div id="flights">
        <br>
        <br>
        <br>
        <br>
        <p class="flight-search-title">Your Flights</p>
        <br>
        <br>
        <br>

        <?php

        foreach ($cars as  $car) {
            $car_id = $car->getCarId();
            $make = $car->getMake();
            $model = $car->getModel();
            $year = $car->getYear();
            $price = $car->getPrice();
            $image = $car->getImage();


            $URL = BASE_URL . "car/detail/" . $car_id;
//
            echo "<div class='flight' href='$URL'>
                                <p style='font-size: medium; margin-bottom: 6px'>$make</p>
                                <p class='flight-airline'>$model</p>
                                <div class='flight-section flight-destination'>
                                    <p class='flight-location flight-margin'>$year</p>
                                    <p class='flight-margin'>➝</p>
                                    <p class='flight-location'>$price</p>
                                </div>
                               
                                </div>";
        }
        }

?>



        <?php

        //display page footer
        parent::displayFooter();
    }

}