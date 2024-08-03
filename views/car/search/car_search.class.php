<?php

/*
 * Author: Jawon Winbush
 * Date: 11/28/2022
 * Name: car_search.class.php
 */
class CarSearch extends CarIndexView
{
    /*
     * the displays accepts an array of car objects and displays
     * them in a grid.
     */

    public function display($terms, $cars)
    {
        //display page header
        parent::displayHeader("Search Results");
        ?>
        <div class="pt-24">
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
                <!-- Tailwind Breadcrumb ending-->
            </section>
            <h1 class="max-w-[92vw] mx-auto my-0"> Search Results for <i><?= $terms ?></i></h1>

        </div>
        <p class="rcd-numbers max-w-[92vw] mx-auto my-0">
            <?php
            echo ((!is_array($cars)) ? "( 0 - 0 )" : "( 1 - " . count($cars) . " )");
            ?>
        </p>
        <hr>

        <!-- display all records in a grid -->
        <div class="pt-[10vh] pb-[10vh] h-full text-md px-2">
            <div
                class='max-w-[92vw] w-full grid justify-evenly sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8 mx-auto my-0'>
                <?php
                if ($cars === 0) {
                    echo "No car was found.<br><br><br><br><br>";
                } else {
                    //display cars in a grid; six cars per row
                    foreach ($cars as $i => $car) {
                        $id = $car->getId();
                        $make = $car->getMake();
                        $model = $car->getModel();
                        $year = $car->getYear();
                        $price = $car->getPrice();
                        $category = $car->getCategory();
                        $image = $car->getImage();
                        if (strpos($image, "http://") === false and strpos($image, "https://") === false) {
                            $image = BASE_URL . "/" . CAR_IMG . $image;
                        }


                        //                    echo "<div class='col'><p><a href='" . BASE_URL . "/car/detail/$id'><img src='" . $image .
//                    "'></a>" . /*<span>$make<br>$model<br>$carCategory</span>*/"</p></div>";
//                    ?>
                        <!--                    --><?php

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
            </div>
        </div>
        <a href="<?= BASE_URL ?>/car/index">Go to car list</a>
        <?php
        //display page footer
        parent::displayFooter();
    }

    //end of display method
}