<?php
/**
 * Author: Jawon Winbush
 * Date: 11/17/22
 * File: car_detail.class.php
 * Description:
 */

class CarDetail extends CarIndexView
{

    public function display($car)
    {
        //display page header
        parent::displayHeader("Display Car Details");
        session_start();

        if (isset($_SESSION['user_id'])
            && isset($_SESSION['isAdmin'])) {

            $user_id = $_SESSION['user_id'];
            $admin = $_SESSION['isAdmin'];
        }

        //retrieve car details by calling get methods
        $car_id = $car->getId();
        $category = $car->getCategory();
        $make = $car->getMake();
        $model = $car->getModel();
        $year = $car->getYear();
        $image = $car->getImage();
        $price = $car->getPrice();
        $description = $car->getDescription();
        $amount = $car->getAmount();

        $URL = BASE_URL;


//        if (strpos($image, "http://") === false and strpos($image, "https://") === false) {
//            $image = BASE_URL . '/' . CAR_IMG . $image;
//        }
        ?>

        <!-- Bread crumb navbar section-->
        <section>
            <nav class="flex pt-24" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="<?= BASE_URL ?>"
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
                            <a href="<?= BASE_URL ?>/car/index"
                               class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Vehicles</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <a href="<?= BASE_URL ?>/car/detail/<?= $car_id ?>"
                               class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Details</a>
                        </div>
                    </li>

                </ol>
            </nav>
            <!-- Tailwind CSS Breadcrumb ending-->
        </section>

        <section class="text-gray-700 body-font overflow-hidden bg-white h-full">
            <div class="container px-5 py-6 mx-auto">
                <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <img alt="<?= $model ?>"
                         class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                         src="<?= $image ?>">

                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <h2 class="text-sm title-font text-gray-500 tracking-widest"><?= $category ?></h2>
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?= $year . " " . $make . " " . $model ?></h1>
                        <div class="flex mb-4">
          <span class="flex items-center text-red-500">
            <?= $amount ?> Cars Left
          </span>
                            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                   viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                   viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                   viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
                        </div>
                        <p class="leading-relaxed"><?= $description ?></p>
                        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">

                            <div class="flex ml-6 items-center">
                                <span class="mr-3">Days</span>
                                <div class="relative">
                                    <select class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                    <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     class="w-4 h-4" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"></path>
                </svg>
              </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <span class="title-font font-medium text-2xl text-gray-900">$<?= $price ?>/day</span>
                            <?php
                            if ($admin == '') {
                                echo "<a href='$URL/car/rent/<?= $car_id ?>'
                               class='flex ml-auto text-white border-0 py-2 px-6 focus:outline-none bg-gradient-to-r from-blue-500 to-cyan-400 rounded'>
                                Reserve
                            </a>";
                            } else {
                                echo "<a href='$URL/user/login/'
                               class='flex ml-auto text-white border-0 py-2 px-6 focus:outline-none bg-gradient-to-r from-blue-500 to-cyan-400 rounded'>
                                Reserve
                            </a>";
                            }?>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        if ($admin == 'yes') {
            echo "<a class='ml-4 text-white border-0 py-2 px-6 focus:outline-none bg-gradient-to-r from-blue-500 to-cyan-400 rounded' href='$URL" . "/car/edit/$car_id'>Edit</a>&nbsp
        <a class='text-white border-0 py-2 px-6 focus:outline-none bg-gradient-to-r from-red-500 to-orange-400 rounded' href='$URL" . "/car/delete/$car_id'>Delete</a>";
        } ?>

        <br>
        <?php
        //display page footer
        parent::displayFooter();

    }

//end of display method
}
