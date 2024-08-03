<?php
/**
 * Author: Matt Cool, Steven Casada, Jawon Winbush
 * Date: 11/17/2022
 * File: car_index.class.php
 * Description: display a list of cars
 */

class CarIndex extends CarIndexView
{
    /*
     * the display method accepts an array of car objects and displays
     * them in a grid.
     */

    public function display($cars)
    {
        //display page header
        parent::displayHeader("List All Cars");

        ?>


        <div class="h-full text-md px-2 pt-24">

            <!-- Tailwind CSS Bread crumb-->
            <section class="fleet-wrapper">
                <nav class="flex pb-4 max-w-[92vw] mx-auto my-0" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="<?= BASE_URL ?>"
                                class="inline-flex items-center text-sm font-medium text-black hover:text-orange-600">
                                <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="<?= BASE_URL ?>/car/index"
                                    class="ml-1 text-sm font-medium text-black hover:text-orange-600 md:ml-2">Vehicles</a>
                            </div>
                        </li>

                    </ol>
                </nav>
                <!-- Tailwind CSS Breadcrumb ending-->
            </section>
            <div
                class='pt-[10vh] pb-[10vh] max-w-[92vw] w-full grid justify-evenly sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8 mx-auto my-0'>
                <?php
                if ($cars === 0) {
                    echo "No cars were found.<br><br><br><br><br>";
                } else {
                    //display cars in a grid; six cars per row
                    foreach ($cars as $car) {
                        $id = $car->getId();
                        $category = $car->getCategory();
                        $make = $car->getMake();
                        $model = $car->getModel();
                        $year = $car->getYear();
                        $price = $car->getPrice();
                        $image = $car->getImage();
                        if (strpos($image, "http://") === false and strpos($image, "https://") === false) {
                            $image = BASE_URL . "/" . CAR_IMG . $image;
                        }

                        echo "<div class='car rounded-lg backdrop-blur-md shadow-md'>
<div>
<img class='rounded-t-lg w-full h-full' src='" . $image . "'>
<div class='p-6'><div class='flex justify-between w-full'><div class='w-8/10'>
<div class='car-content'>
<h1 class='text-sm font-medium'>$make</h1><h1>$model</h1><h1>$year</h1></div>

<h2 class='mb-2 text-sm font-medium'>$category</h2> 
<p>$$price<span>/day</span></p>
</div>

<div class='flex space-x-2 text-white w-2/10'>
<a  href='", BASE_URL, "/car/detail/$id' class='car-button' data-te-ripple-init><img class='car-icon' src=' https://cdn-icons-png.flaticon.com/512/7371/7371879.png' alt='Select car'></a>
</div></div></div></div></div>";

                    }
                }
                ?>

                <!--            <div class="flex justify-center">-->
                <!--                <div-->
                <!--                        class="block max-w-sm rounded-lg bg-white shadow-lg dark:bg-neutral-700">-->
                <!--                    <a href="#!" data-te-ripple-init data-te-ripple-color="light">-->
                <!--                        <img-->
                <!--                                class="rounded-t-lg"-->
                <!--                                src="https://tecdn.b-cdn.net/img/new/standard/nature/186.jpg"-->
                <!--                                alt="" />-->
                <!--                    </a>-->
                <!--                    <div class="p-6">-->
                <!--                        <h5-->
                <!--                                class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">-->
                <!--                            Card title-->
                <!--                        </h5>-->
                <!--                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">-->
                <!--                            Some quick example text to build on the card title and make up the-->
                <!--                            bulk of the card's content.-->
                <!--                        </p>-->
                <!--                        <button-->
                <!--                                type="button"-->
                <!--                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"-->
                <!--                                data-te-ripple-init-->
                <!--                                data-te-ripple-color="light">-->
                <!--                            Button-->
                <!--                        </button>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
            </div>
        </div>

        <?php
        //display page footer
        parent::displayFooter();

    } //end of display method
}