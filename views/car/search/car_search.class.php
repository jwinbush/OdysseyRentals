<?php

/*
 * Author: Jawon Winbush
 * Date: 11/28/2022
 * Name: car_search.class.php
 */
class CarSearch extends CarIndexView {
    /*
     * the displays accepts an array of car objects and displays
     * them in a grid.
     */

     public function display($terms, $cars) {
        //display page header
        parent::displayHeader("Search Results");
        ?>
         <div class="pt-24">
         <!-- Tailwind CSS Bread crumb-->
         <section>
             <nav class="flex pb-4" aria-label="Breadcrumb">
                 <ol class="inline-flex items-center space-x-1 md:space-x-3">
                     <li class="inline-flex items-center">
                         <a href="<?=BASE_URL ?>"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                             <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                  xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                             </svg>
                             Home
                         </a>
                     </li>
                     <li>
                         <div class="flex items-center">
                             <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor"
                                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                       d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                       clip-rule="evenodd"></path>
                             </svg>
                             <a href="<?=BASE_URL ?>/car/index"
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Vehicles</a>
                         </div>
                     </li>

                 </ol>
             </nav>
             <!-- Tailwind CSS Breadcrumb ending-->
         </section>
         Search Results for <i><?= $terms ?></i></div>
        <span class="rcd-numbers">
            <?php
            echo ((!is_array($cars)) ? "( 0 - 0 )" : "( 1 - " . count($cars) . " )");
            ?>
        </span>
        <hr>

       <!-- display all records in a grid -->
         <div class="h-full text-md px-2">
             <div class='grid justify-evenly sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4'>
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
                    if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
                        $image = BASE_URL . "/" . CAR_IMG . $image;
                    }

              
//                    echo "<div class='col'><p><a href='" . BASE_URL . "/car/detail/$id'><img src='" . $image .
//                    "'></a>" . /*<span>$make<br>$model<br>$carCategory</span>*/"</p></div>";
//                    ?>
<!--                    --><?php
        if ($i % 6 == 5 || $i == count($cars) - 1) {
              echo "</div>";
        }
                    echo "<div class='rounded-lg bg-white shadow-md max-w-50 dark:bg-neutral-700'>
<p><a href='", BASE_URL, "/car/detail/$id' data-te-ripple-init data-te-ripple-color='light'>
<img class='rounded-t-lg w-full h-full' src='" . $image . "'></a>
<div class='p-6 max-w-40'>
<h5 class='mb-2 text-sm font-medium text-neutral-800 dark:text-neutral-50'>$year $make $model</h5> 
<div class='flex justify-center space-x-2'>
<button type='button' class='inline-block rounded px-6 pt-2.5 pb-2 text-xs bg-primary-600'>$$price/Day </button>
</div></div></p></div>";
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